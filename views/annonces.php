
  <title>Annonces Agricoles</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    /* Pour que le footer soit toujours visible en bas, même si le contenu est court */
    html, body {
      height: 100%;
      margin: 0;
      background-color: #f9faf7;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar personnalisée */
    nav.navbar {
      background-color: #2e7d32;
    }

    nav.navbar .navbar-brand,
    nav.navbar .nav-link {
      color: #e8f5e9;
    }

    nav.navbar .nav-link:hover {
      color: #a5d6a7;
    }

    /* Contenu principal pousse footer vers le bas */
    main.container {
      flex: 1 0 auto;
      padding-top: 2rem;
      padding-bottom: 2rem;
      max-width: 1140px;
    }

    /* Footer fixé */
    footer.footer {
      flex-shrink: 0;
 
      padding: 1rem 0;
      text-align: center;
      font-size: 0.9rem;

    }

    /* Style des cartes */
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgb(46 125 50 / 0.1);
      border: none;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      background: #ffffff;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgb(46 125 50 / 0.25);
    }

    /* Image dans la carte */
    .card-img-top {
      height: 160px;
      object-fit: cover;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      transition: transform 0.25s ease;
    }

    .card:hover .card-img-top {
      transform: scale(1.05);
    }

    .card-body {
      color: #1b5e20;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }

    .card-text {
      font-size: 0.95rem;
      color: #4a7c3b;
      line-height: 1.4;
    }

    /* Responsive spacing entre cartes */
    .row.g-4 > [class*='col-'] {
      margin-bottom: 1.5rem;
    }
  </style>
</head>

<body>

  <!-- Contenu principal -->
  <main class="container">
    <header class="text-center mb-5">
      <h2 class="fw-bold" style="color:#2e7d32;">Annonces & Offres Agricoles</h2>
      <p class="text-muted fs-5">Retrouvez ici toutes les annonces publiées par la communauté agricole.</p>
    </header>

    <div class="row g-4">
      <!-- Exemple 10 cartes avec images -->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/mais.jpg"
            class="card-img-top" alt="Maïs">
          <div class="card-body">
            <h5 class="card-title">Vente de maïs - 2 tonnes</h5>
            <p class="card-text">Producteur : Jean (Bafoussam)<br>Prix : 300 FCFA/kg</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=400&q=80"
            class="card-img-top" alt="Manioc">
          <div class="card-body">
            <h5 class="card-title">Recherche acheteurs de manioc</h5>
            <p class="card-text">Quantité disponible : 1 tonne<br>Lieu : Dschang</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/cacao.jpg"
            class="card-img-top" alt="Cacao">
          <div class="card-body">
            <h5 class="card-title">Vente de cacao biologique</h5>
            <p class="card-text">Producteur : Marie (Nkongsamba)<br>Prix : 450 FCFA/kg</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/engrais.jpg"
            class="card-img-top" alt="Engrais naturel">
          <div class="card-body">
            <h5 class="card-title">Offre d’engrais naturel</h5>
            <p class="card-text">Disponible 500 sacs<br>Contact : 675 123 456</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/manioc.jpg"
            class="card-img-top" alt="Semences de manioc">
          <div class="card-body">
            <h5 class="card-title">Demande de semences de manioc</h5>
            <p class="card-text">Quantité : 200 kg<br>Localisation : Bafang</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/poulet.jpg"
            class="card-img-top" alt="Poulets fermiers">
          <div class="card-body">
            <h5 class="card-title">Vente de poulets fermiers</h5>
            <p class="card-text">30 poulets disponibles<br>Prix : 5 000 FCFA/unité</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1528825871115-3581a5387919?auto=format&fit=crop&w=400&q=80"
            class="card-img-top" alt="Apiculture">
          <div class="card-body">
            <h5 class="card-title">Offre de formation en apiculture</h5>
            <p class="card-text">Lieu : Yaoundé<br>Durée : 3 semaines</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=400&q=80"
            class="card-img-top" alt="Distributeur légumes bio">
          <div class="card-body">
            <h5 class="card-title">Recherche distributeur pour légumes bio</h5>
            <p class="card-text">Zone : Douala<br>Volume mensuel : 1 tonne</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/miel.jpg" 
            class="card-img-top" alt="Miel naturel">

          <div class="card-body">
            <h5 class="card-title">Vente de miel naturel</h5>
            <p class="card-text">Producteur : Paul (Bafoussam)<br>Prix : 4 000 FCFA/kg</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="assets/images/materiel.jpg" class="card-img-top" alt="Matériel agricole">

          <div class="card-body">
            <h5 class="card-title">Demande de matériel agricole</h5>
            <p class="card-text">Tracteurs et outils divers<br>Contact : 699 456 789</p>
          </div>
        </div>
      </div>
    </div>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

