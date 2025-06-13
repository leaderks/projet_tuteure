
<head>

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="cartModalLabel">Votre panier</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <section class="cart-section">
          <p id="total-price" class="fw-bold text-end mt-3"></p>
          <button class="btn btn-success w-100 mt-2 checkout">Passer à la caisse</button>
        </section>
      </div>
    </div>
  </div>
</div>
 <script src="assets/js/cart.js"></script>

 <script src="assets/js/product.js"></script>
  <main>
    <section class="hero-section" id="home">
      <h1>Bienvenu sur notre boutique</h1>
      <p>trouvez les produits de qualite a des prix imbattables, </p>
    </section>
    <section class="products-section" id="products">
      <div class="container mt-4">
        <h2 class="text-center">Boutique Agricole</h2>
      
        <!-- FILTRE -->
        <div class="category-filter text-center">
          <button class="btn btn-outline-success m-1" onclick="filterCategory('all')">Tous</button>
          <button class="btn btn-outline-success m-1" onclick="filterCategory('Engrais')">Engrais</button>
          <button class="btn btn-outline-success m-1" onclick="filterCategory('Semences')">Semences</button>
          <button class="btn btn-outline-success m-1" onclick="filterCategory('Récoltes')">Récoltes</button>
          <button class="btn btn-outline-success m-1" onclick="filterCategory('Matériel')">Matériel</button>
        </div>
      
      </div>
      <h2>Nos produits</h2>
      <div class="products-container" id="products-container">
      </div> 
    </section>
    <!-- section modal panier -->
    <section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  

  function filterCategory(cat) {
    if (cat === "all") {
      displayProducts(products);
    } else {
      displayProducts(products.filter(p => p.category === cat));
    }
  }

  function addToCart(name) {
    toastr.success(`${name} ajouté au panier !`, "Succès");
  }

  window.onload = () => displayProducts();
</script>

    </section>
  </main>
