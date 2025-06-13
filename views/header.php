<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Projet Tutere</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- vendors CSS Files -->
  <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendors/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./" class="logo d-flex align-items-center">
        <img src="./assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./">Accueil</a></li>
          <li><a href="./?page=blog">Blog</a></li>
          <li><a href="./?page=produit">Produit</a></li>
          <li><a href="./?page=formations">formations</a></li>
          <li><a href="./?page=offres">Offres d'emplois</a></li>
          <li><a href="./?page=annonces">Annonces</a></li>
          <li><a href="./?page=profil">profil</a></li>
          <!-- Exemple de bouton panier -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cartModal">
  Voir le panier
</button>

          <li>
            <a class="nav-link" href="./?page=login"><button class="btn rounded-5 btn-outline-success fw-bold">Se Connecter</button></a>
          </li>
          <li>
            <a class="nav-link" href="./?page=login"><button class="btn rounded-5 btn-outline-success fw-bold">S'inscrire</button></a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>



