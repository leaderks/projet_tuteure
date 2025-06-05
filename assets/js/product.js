
const product= [
  {
    id: 1,
    name: "Super gros",
    price: 3900,
    image:"supergros.jpeg",
    detailsUrl: "produit.php?id=1"
  },
  {
    id: 2,
    name: "Herbi maïs",
    price: 3000,
    image: "hebimais.jpeg",
    detailsUrl: "produit.php?id=2"
  },
  {
    id: 3,
    name: "uree",
    price: 22000,
    image: "uree.jpeg",
    detailsUrl: "produit.php?id=3"
  },
  {
    id: 4,
    name: "banane",
    price: 20000,
    image: "banane.jpg",
    detailsUrl: "produit.php?id=4"
  },
  {
    id: 5,
    name: "insecticide cacao",
    price: 1000,
    image: "cacaoforce.jpeg",
    detailsUrl: "produit.php?id=5"
  },
  {
    id: 6,
    name: "Maïs",
    price: 3000,
    image: "mais.jpeg",
    detailsUrl: "produit.php?id=6"
  },
  {
    id: 7,
    name: "Engin",
    price: 100000,
    image: "engin.jpeg",
    detailsUrl: "produit.php?id=7"
  },
  {
    id: 8,
    name: "Engin",
    price: 100000,
    image: "tracteur.jpeg",
    detailsUrl: "produit.php?id=8"
  },
  {
    id: 9,
    name: "Pomme de terre",
    price: 25000,
    image: "pomme_de_terre.jpeg",
    detailsUrl: "produit.php?id=9"
  },
  {
    id: 9,
    name: "Haricot rouge",
    price: 8000,
    image: "haricot_rouge.jpeg",
    detailsUrl: "produit.php?id=9"
  },
 {
    id: 10,
    name: "Noix de plame ",
    price: 1000,
    image: "noix_palme.jpeg",
    detailsUrl: "produit.php?id=10"
  },
  {
    id: 11,
    name: "Noix de plame ",
    price: 1000,
    image: "manioc.jpeg",
    detailsUrl: "produit.php?id=11"
  }
 
];

// Fonction pour afficher la liste des produits
function afficherListerProduits() {

  const container = document.getElementById('products-container');

  product.forEach((produit) => {
  	const existingProduct = cart.find(item =>item.id===produit.id);
    const card = document.createElement("div");
    card.className = "product-card";
    if (existingProduct) {
    	card.innerHTML = `
      <img src="assets/img/${produit.image}" alt="${produit.name}" class="product-image">
      <div class="product-info">
        <h3>${produit.name}</h3>
        <p>Prix : FCFA ${produit.price.toLocaleString()}</p>
        <a href="${produit.detailsUrl}" class="view-details"><i class="fas fa-eye"></i></a>
        <button class="add-to-cart already-in-cart" id="btn-${produit.id}" onclick="cartModal">Deja au panier</button>
      </div>
    `;
     
    }else{
    	card.innerHTML = `
      <img src="assets/img/${produit.image}" alt="${produit.name}" class="product-image">
      <div class="product-info">
        <h3>${produit.name}</h3>
        <p>Prix : FCFA ${produit.price.toLocaleString()}</p>
        <a href="${produit.detailsUrl}" class="view-details"><i class="fas fa-eye"></i></a>
        <button class="add-to-cart" id="btn-${produit.id}" onclick="AjouterProduitPanier(${produit.id})">ajouter au panier</button>
      </div>
    `;
    
    }
    
    container.appendChild(card);
  });
}

// Exécuter la fonction au chargement
window.addEventListener("DOMContentLoaded", afficherListerProduits);
// Initialisation du panier depuis le localStorage
 let cart = JSON.parse(localStorage.getItem("cart")) || [];
//Pour ajouter un produit dans le panier
function AjouterProduitPanier(productId) {
  const produit = product.find(p => p.id === productId); 
  const existingProduct = cart.find(item => item.id === productId);

  if (existingProduct) {
    alert("Ce produit est déjà dans votre panier");
  } else {
    cart.push({ ...produit, quantity: 1 }); 
    localStorage.setItem("cart", JSON.stringify(cart));

    updateCart();
    //alert("Produit ajouté au panier avec succès");
    //  Mise à jour du localStorage
  }

  
  //  Mise à jour du bouton
  const addToCartItemBtn = document.getElementById(`btn-${productId}`); 

  if (addToCartItemBtn) {
    addToCartItemBtn.setAttribute("onclick", `window.location='produit.php?id=${productId}'`);

    addToCartItemBtn.innerText = "Déjà au panier";
    addToCartItemBtn.setAttribute("onclick", "window.location='produit.php'");
  }
}

 function updateCart(){
	const  cartCount = document.getElementById("cart-count");
	cartCount.textContent = cart.length;
 }
 document.addEventListener("DOMContentLoaded", function () {
   
		updateCart();
	});