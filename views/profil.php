<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon Profil - AgriPlateforme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f4f9f4;
      font-family: 'Segoe UI', sans-serif;
    }

    header {
      background-color: #e2f0dc;
      padding: 3rem 1rem;
      text-align: center;
      margin-bottom: 2rem;
    }

    header h2 {
      font-weight: 700;
      color: #2e7d32;
    }

    header p {
      font-size: 1.1rem;
      color: #4b6043;
    }

    .profile-section {
      margin-bottom: 100px;
    }

    .card-custom {
      border: none;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
      background-color: #ffffff;
      transition: transform 0.2s;
    }

    .card-custom:hover {
      transform: translateY(-5px);
    }

    .card-custom .card-header {
      background-color: #cdecc5;
      border-radius: 15px 15px 0 0;
      font-weight: bold;
      color: #2f5e2f;
    }

    .list-group-item {
      background-color: #fff;
      border: none;
      padding-left: 0;
    }

    footer {
      background-color: #dfe8d4;
      text-align: center;
      padding: 2rem 1rem;
      color: #4e5a3d;
      margin-top: 4rem;
    }
  </style>
</head>
<body>

  <header>
    <h2><i class="bi bi-person-circle me-2"></i>Mon Espace Personnel</h2>
    <p>Gérez vos informations, annonces, offres et formations suivies.</p>
  </header>

  <main class="container profile-section">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card card-custom">
          <div class="card-header">
            <i class="bi bi-info-circle-fill me-2"></i>Mes Informations
          </div>
          <div class="card-body">
            <p><strong>Nom :</strong> Kamsu Kemdjo</p>
            <p><strong>Email :</strong> agriculteur@mail.com</p>
            <a href="#" class="btn btn-success rounded-pill mt-3"><i class="bi bi-pencil-square me-1"></i>Modifier mes infos</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-custom">
          <div class="card-header">
            <i class="bi bi-bar-chart-line-fill me-2"></i>Mes Activités
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="bi bi-megaphone-fill text-success me-2"></i>2 annonces publiées</li>
              <li class="list-group-item"><i class="bi bi-mortarboard-fill text-success me-2"></i>1 formation suivie</li>
              <li class="list-group-item"><i class="bi bi-envelope-open-fill text-success me-2"></i>1 message reçu</li>
            </ul>
            <a href="#" class="btn btn-outline-success rounded-pill mt-3">Voir mes activités</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- <footer>
    &copy; 2025 AgriPlateforme – Tous droits réservés.
  </footer> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
