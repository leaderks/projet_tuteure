<?php
// Simple routeur pour charger les pages
require_once __DIR__ . '/views/header.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'blog':
        require __DIR__ . '/views/blog.php';
        break;
    default:
        require __DIR__ . '/views/home.php';
        break;
}

require_once __DIR__ . '/views/footer.php';