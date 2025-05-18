<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Plateforme Agricole</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <!-- Header -->
  <header>
    <h2 class="h5"> Plateforme Agricole - Cultivons l'information ensemble </h2>
  </header>
  <main>
  <div class="card p-4 card-container shadow bg-white bg-opacity-75 " style="width: 100%; max-width: 400px;">
    <div id="form-container">
      <!-- Formulaires chargés dynamiquement ici -->
    </div>
    <div id="error" class="text-danger mt-2"></div>
  </div>
  </main>
<!-- Footer -->
<footer>
    <p>&copy; <?php echo date('Y'); ?> Plateforme Agricole. Tous droits réservés.</p>
  </footer>


  <script src="frontend/js/app.js"></script>
</body>
</html>
