<?php
// Simple routeur pour charger les pages
require_once __DIR__ . '/views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'login':
        require __DIR__ . '/views/login.php';
        break;
    case 'logout':
        session_start();
        session_destroy();
        header('Location: index.php');
        break;
    case 'blog':
        require __DIR__ . '/views/blog.php';
        break;
    case 'produit':
        require __DIR__ . '/views/produit.php';
        break;
    default:
        require __DIR__ . '/views/home.php';
        break;
}

require_once __DIR__ . '/views/footer.php';