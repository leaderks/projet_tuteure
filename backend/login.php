<?php
session_start();
require 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = [
        
        
        'email' => $user['email'],
        'role' => $user['role']
    ];
    echo json_encode([
        'status' => 'success',
        'role'=>$user['role']
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Identifiants incorrects']);
}
