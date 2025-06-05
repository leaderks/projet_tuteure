<?php
require_once 'actions/database.php';

// Pagination
$limit = 5;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$message = "";

// Bloquer un utilisateur
if (isset($_GET['bloquer'])) {
    $id = (int) $_GET['bloquer'];
    $stmt = $pdo->prepare("UPDATE users SET etat_user = 1 WHERE idUsers = ?");
    $stmt->execute([$id]);

    // Récupérer le nom pour le message
    $stmt = $pdo->prepare("SELECT nomUsers FROM users WHERE idUsers = ?");
    $stmt->execute([$id]);
    $nom = $stmt->fetchColumn();

    header("Location: users.php?page=$page&message=" . urlencode("Utilisateur $nom bloqué."));
    exit();
}

// Débloquer un utilisateur
if (isset($_GET['debloquer'])) {
    $id = (int) $_GET['debloquer'];
    $stmt = $pdo->prepare("UPDATE users SET etat_user = 0 WHERE idUsers = ?");
    $stmt->execute([$id]);

    $stmt = $pdo->prepare("SELECT nomUsers FROM users WHERE idUsers = ?");
    $stmt->execute([$id]);
    $nom = $stmt->fetchColumn();

    header("Location: users.php?page=$page&message=" . urlencode("Utilisateur $nom débloqué."));
    exit();
}

// Message affiché si présent dans l'URL
$message = isset($_GET['message']) ? urldecode($_GET['message']) : "";

// Nombre total d'utilisateurs
$totalUsers = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$totalPages = ceil($totalUsers / $limit);

// Récupérer les utilisateurs
$stmt = $pdo->prepare("SELECT * FROM users ORDER BY idUsers DESC LIMIT ? OFFSET ?");
$stmt->bindValue(1, $limit, PDO::PARAM_INT);
$stmt->bindValue(2, $offset, PDO::PARAM_INT);
$stmt->execute();
$users = $stmt->fetchAll();
?>
