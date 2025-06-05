<?php

class HomeController
{
    public function index()
    {
        require __DIR__ . '/../views/header.php';
        require __DIR__ . '/../views/home.php';
        require __DIR__ . '/../views/footer.php';
    }
}