<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme Agricole - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .section-title { margin-top: 40px; margin-bottom: 20px; }
    .card-icon { font-size: 30px; color: #28a745; }
  </style>
</head>
<body>

  <!-- Navigation principale -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">AgriPlateforme</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#formations">Formations</a></li>
          <li class="nav-item"><a class="nav-link" href="#annonces">Annonces</a></li>
          <li class="nav-item"><a class="nav-link" href="#emplois">Emplois</a></li>
          <li class="nav-item"><a class="nav-link" href="#messagerie">Messagerie</a></li>
          <li class="nav-item"><a class="nav-link" href="#profil">Mon Profil</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-light py-5 text-center">
    <div class="container">
      <h1 class="display-4">Bienvenue sur AgriPlateforme</h1>
      <p class="lead">Connecter les agriculteurs, acheteurs, conseillers et fournisseurs autour d’une agriculture moderne et efficace.</p>
    </div>
  </header>

  <!-- Fonctionnalités -->
  <section class="container mt-5">
    <h2 class="section-title text-center">Fonctionnalités principales</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">🌾</div>
            <h5 class="card-title">Produits Agricoles</h5>
            <p class="card-text">Consultez ou proposez des produits agricoles selon votre rôle.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">📢</div>
            <h5 class="card-title">Annonces & Offres</h5>
            <p class="card-text">Publiez et consultez des offres, demandes ou services agricoles.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">👩‍🏫</div>
            <h5 class="card-title">Formations & Conseils</h5>
            <p class="card-text">Accédez à des formations, guides et bonnes pratiques agricoles.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">💬</div>
            <h5 class="card-title">Messagerie privée</h5>
            <p class="card-text">Communiquez en toute sécurité entre utilisateurs (agriculteurs, acheteurs, etc.).</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">📈</div>
            <h5 class="card-title">Statistiques</h5>
            <p class="card-text">Suivez les indicateurs clés de l’activité agricole locale.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <div class="card-icon mb-3">⚠️</div>
            <h5 class="card-title">Alertes agricoles</h5>
            <p class="card-text">Recevez des alertes sur les maladies, prix, changements climatiques ou lois agricoles.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-success text-white mt-5 p-4 text-center">
    <div class="container">
      &copy; 2025 AgriPlateforme - Tous droits réservés
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
