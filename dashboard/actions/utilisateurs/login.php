<?php 
session_start();
require_once '../../actions/database.php';

// Récupération des données envoyées en JSON
$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

// Vérification si les champs sont bien remplis
if (empty($email) || empty($password)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Veuillez remplir tous les champs.'
    ]);
    exit;
}

// Recherche de l'utilisateur dans la base de données
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    // Vérification si le compte est désactivé (1 = désactivé, 0 = actif ?)
    if ((int)$user['etat_user'] === 1) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Votre compte est désactivé.'
        ]);
        exit;
    }

    // Connexion réussie, initialisation de la session
    $_SESSION['user'] = [
        'id' => $user['idUsers'],
        'email' => $user['email'],
        'nom' => $user['nomUsers'],
        'role' => $user['role'],
        'etat_user' => $user['etat_user']
    ];

    echo json_encode([
        'status' => 'success',
        'role' => $user['role']
    ]);

} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Identifiants incorrects.'
    ]);
}
