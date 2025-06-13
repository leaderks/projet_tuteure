<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Agriculture Durable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .post-img img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 0.5rem;
    }
    .post-title {
      font-size: 1.25rem;
      font-weight: bold;
    }
    .readmore {
      text-decoration: none;
      font-weight: 500;
    }
    .meta {
      font-size: 0.9rem;
      color: #6c757d;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

<header class="bg-dark text-white text-center py-5">
  <h1>Blog</h1>
  <p class="lead">Bienvenue sur la page blog. Ici, vous pouvez en savoir plus sur notre site.</p>
</header>

<main class="container my-5">
  <div class="row gy-4">

    <div class="col-md-4">
      <div class="card">
        <div class="post-img">
          <img src="assets/img/blog1.jpg" alt="Agriculture régénérative">
        </div>
        <div class="card-body">
          <div class="meta">12 Décembre - Par Junior</div>
          <h5 class="post-title">Comment l’agriculture régénérative peut sauver nos sols</h5>
          <p>Découvrez les techniques qui permettent de restaurer la biodiversité et d’enrichir naturellement les terres agricoles.</p>
          <a href="blog-details.html" class="readmore">En savoir plus →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="post-img">
          <img src="assets/img/blog2.jpg" alt="Femmes et agriculture">
        </div>
        <div class="card-body">
          <div class="meta">12 Décembre - Par Junior</div>
          <h5 class="post-title">Le rôle des femmes dans l’agriculture africaine</h5>
          <p>Les femmes représentent 60 à 80 % de la main-d’œuvre agricole en Afrique : leur autonomisation est essentielle pour la sécurité alimentaire.</p>
          <a href="blog-details.html" class="readmore">En savoir plus →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="post-img">
          <img src="assets/img/blog3.jpg" alt="Circuits courts">
        </div>
        <div class="card-body">
          <div class="meta">12 Décembre - Par Junior</div>
          <h5 class="post-title">Pourquoi privilégier les circuits courts alimentaires</h5>
          <p>Moins d’intermédiaires, plus de fraîcheur et un soutien direct aux producteurs : les circuits courts transforment notre manière de consommer.</p>
          <a href="blog-details.html" class="readmore">En savoir plus →</a>
        </div>
      </div>
    </div>

  </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
