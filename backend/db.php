<?php
$host = 'localhost';        
$dbname = 'my_bd'; 
$username = 'root';       
$password = '';      

try {
    // Connexion à la base de donnee avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
} catch (PDOException $e) {
    // En cas d’erreur de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
