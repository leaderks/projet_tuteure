<?php

session_start(); 

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
   
    header('Location: ../index.php');
    exit;
}

