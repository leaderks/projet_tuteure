
  <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    footer {
      flex-shrink: 0;
    }

    .card-icon {
      font-size: 60px;
      color: #28a745;
      line-height: 1;
    }

    /* Espace personnalisé au besoin */
    #blog {
      margin-bottom: 50px; /* espace sous le carousel */
    }

    .final-section {
      margin-bottom: 60px; /* espace au-dessus du footer */
    }
  </style>
</head>
<body>

<main class="main">

  <!-- Section Carrousel -->
  <section id="blog" class="blog section dark-background">
    <div id="blog-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/img/carousel4.jpg" alt="">
        <div class="carousel-container">
          <h2>L’agriculture est la meilleure solution à la famine dans le monde</h2>
          <p>Investir dans l'agriculture locale permet non seulement de nourrir les populations, mais aussi de créer des emplois durables et de protéger l'environnement.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/carousel3.jpg" alt="">
        <div class="carousel-container">
          <h2>Les légumes bio sont bons pour la santé</h2>
          <p>Consommer des légumes issus de l’agriculture biologique réduit les risques d’exposition aux pesticides et favorise une meilleure santé globale.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/carousel2.jpg" alt="">
        <div class="carousel-container">
          <h2>Fournir des produits frais chaque jour</h2>
          <p>Des circuits courts de distribution garantissent la fraîcheur des produits tout en soutenant les petits producteurs locaux.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/carousel1.jpg" alt="">
        <div class="carousel-container">
          <h2>L'agriculture comme passion</h2>
          <p>Au-delà d'un métier, cultiver la terre est un engagement au quotidien pour nourrir les autres et préserver notre planète.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/blog_5.jpg" alt="">
        <div class="carousel-container">
          <h2>Bonne nourriture pour tous</h2>
          <p>Garantir l’accès à une alimentation saine et équilibrée est un droit fondamental pour chaque être humain, quel que soit son pays.</p>
        </div>
      </div>

      <a class="carousel-control-prev" href="#blog-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#blog-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>
    </div>
  </section>

  <!-- Header -->
  <header class="bg-light py-5 text-center mt-5">
    <div class="container">
      <h1 class="display-4">Bienvenue sur AgriPlateforme</h1>
      <p class="lead">Connecter les agriculteurs, acheteurs, conseillers et fournisseurs autour d’une agriculture moderne et efficace.</p>
    </div>
  </header>

  <!-- Fonctionnalités -->
  <section class="container mt-5 final-section">
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

</main>



<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

