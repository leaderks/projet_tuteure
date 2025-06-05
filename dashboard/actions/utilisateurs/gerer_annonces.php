<?php
require_once '../../actions/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = isset($_POST['titre']) ? trim($_POST['titre']) : '';
    $contenu = isset($_POST['contenu']) ? trim($_POST['contenu']) : '';

    $errors = [];
    if (strlen($titre) < 5) {
        $errors[] = "Le titre doit contenir au moins 5 caractères.";
    }
    if (strlen($contenu) < 10) {
        $errors[] = "Le contenu est trop court.";
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO annonce (titre, contenu, date_publication) VALUES (?, ?, NOW())");
        $stmt->execute([$titre, $contenu]);

        // Redirection avec message succès
        header("Location: ../../annonce.php?message=" . urlencode("Annonce publiée avec succès !"));
        exit();
    } else {
        // Encodage des erreurs dans une chaîne pour passer par l'URL
        // On joint les erreurs par | puis on les urlencode
        $errorMessage = urlencode(implode('|', $errors));
        header("Location: ../../annonce.php?errors=$errorMessage");
        exit();
    }
}

// Affichage des messages dans annonce.php (partie affichage)
if (isset($_GET['message'])) {
    echo "<p style='color:green;'>" . htmlspecialchars(urldecode($_GET['message'])) . "</p>";
}

if (isset($_GET['errors'])) {
    $errors = explode('|', urldecode($_GET['errors']));
    foreach ($errors as $err) {
        echo "<p style='color:red;'>" . htmlspecialchars($err) . "</p>";
    }
}
?>
