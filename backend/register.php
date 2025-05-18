<?php
/* require 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$nom = $data['nom'];
$email = $data['email'];
$password = password_hash($data['password'], PASSWORD_DEFAULT);
$role = $data['role'];
try {
    $stmt = $pdo->prepare("INSERT INTO users (nomUsers,email,password,role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $password,$role]);
    echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Email déjà utilisé ou erreur.']);
}
 */


// Affichage des erreurs (utile en développement)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
require 'db.php';

// Récupérer les données JSON envoyées
$data = json_decode(file_get_contents("php://input"), true);

// Vérifier que toutes les données sont bien présentes
if (!isset($data['nom'], $data['email'], $data['password'], $data['role'])) {
    echo json_encode(['status' => 'error', 'message' => 'Données manquantes.']);
    exit;
}else{

$nom = htmlspecialchars(trim($data['nom']));
$email = htmlspecialchars(trim($data['email']));
$password = password_hash($data['password'], PASSWORD_DEFAULT);
$role = htmlspecialchars(trim($data['role']));
}
try {
    // Préparer et exécuter la requête
    $stmt = $pdo->prepare("INSERT INTO users (nomUsers, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $password, $role]);

    // Répondre en JSON
    echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
    // Gestion d'erreur SQL
    echo json_encode(['status' => 'error', 'message' => 'Email déjà utilisé ou erreur lors de l\'enregistrement.']);
}
