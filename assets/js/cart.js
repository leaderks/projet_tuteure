let carts = JSON.parse(localStorage.getItem("carts")) || [];

function updateCart() {
	const cartCount = document.getElementById("cart-count");
	cartCount.textContent = carts.length;
}

function DisplayCart() {
	const CartItemsContainer = document.getElementById("cart-items");
	// if (!CartItemsContainer) {
    //     console.warn("Élément #cart-items non trouvé !");
    //     return;
    // }
    //vide le conteneur des article
	CartItemsContainer.innerHTML = "";
	let total = 0;
	cart.forEach((item, index) => {
		const cartItem = document.createElement("div");
		cartItem.classList.add("card-item");
		cartItem.innerHTML = `
			<div>
        <h3>${item.name} <img src="assets/img/${item.image}" width="48px" style="border-radius: 5px; margin-bottom: 10px;" /></h3>
        <p>Prix: ${item.price.toFixed(2)} fcfa</p>
        <div class="quantity-controls">
          <button onclick="DecrementaionQuantite(${index})">-</button>
          <input type="text" value="${item.quantity}" readonly>
          <button onclick="incrementationQuantite(${index})">+</button>
        </div>
        <button onclick="SupprimerItem(${index})">Retirer</button>
      </div>
		`;
		CartItemsContainer.appendChild(cartItem);
		total += item.price * item.quantity;
	});
	document.getElementById("total-price").textContent = `Total: ${total.toFixed(2)} FCFA`;
    console.log("Total: ", total);

}

function DecrementaionQuantite(index) {
	if (cart[index].quantity > 1) {
		cart[index].quantity--;
		localStorage.setItem("carts", JSON.stringify(carts));
		DisplayCart();
		updateCart();
	}
}

function incrementationQuantite(index) {
	cart[index].quantity++;
	localStorage.setItem("carts", JSON.stringify(carts));
	DisplayCart();
	updateCart();
}

function SupprimerItem(index) {
	cart.splice(index, 1);
	localStorage.setItem("carts", JSON.stringify(carts));
	DisplayCart();
	updateCart();
}

document.addEventListener("DOMContentLoaded", function () {
	updateCart();
	DisplayCart();
	UpdateQuantity();
});
