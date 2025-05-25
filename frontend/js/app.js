const container = document.getElementById("form-container");
const errorDiv = document.getElementById("error");

function showLoginForm() {
  container.innerHTML = `
    <h4 class="text-center">Se connecter</h4>
    <input id="email" type="email" class="form-control my-2" placeholder="Email">
    
    <input id="password" type="password" class="form-control my-2" placeholder="Mot de passe">
    <button class="btn btn-success w-100" onclick="login()">Connexion</button>
    <p class="mt-3 text-center">
      <a href="#" onclick="showRegisterForm()" class="text-success">Créer un compte</a> |
      <a href="#" onclick="showResetForm()" class="text-success">Mot de passe oublié?</a>
    </p>
  `;
  errorDiv.textContent = "";
}

function showRegisterForm() {
  container.innerHTML = `
    <h4 class="text-center">Inscription</h4>
    <input id="nom" type="text" class="form-control my-2" placeholder="Nom ">
    <input id="email" type="email" class="form-control my-2" placeholder="Email">

    <select id="role" class="form-control my-2">
      <option value="">--fonction--</option>
      <option value="agriculteur">Agriculteur</option>
      <option value="fournisseur">Fournisseur</option>
      <option value="acheteur">Acheteur</option>
      <option value="vendeur">Vendeur</option>
      <option value="conseiller">Conseiller agricole</option>
    </select>

    <input id="password" type="password" class="form-control my-2" placeholder="Mot de passe">
    <button class="btn btn-success w-100" onclick="register()" class="text-success">S'inscrire</button>
    <p class="mt-3 text-center">
      <a href="#" onclick="showLoginForm()" class="text-success">Déjà un compte ? Se connecter</a>
    </p>
  `;
  errorDiv.textContent = "";
}

function showResetForm() {
  container.innerHTML = `
    <h4 class="text-center">Réinitialiser le mot de passe</h4>
    <input id="pwd" type="password" class="form-control my-2" placeholder="Mot de passe">
    <input id="pwdConfirm" type="password" class="form-control my-2" placeholder="Confirmer">
    <button class="btn btn-warning w-100" onclick="resetPassword()">Réinitialiser</button>
    <p class="mt-3 text-center">
      <a href="#" onclick="showLoginForm()" class="text-success">Retour à la connexion</a>
    </p>
  `;
  errorDiv.textContent = "";
}

showLoginForm(); // Affiche le formulaire par défaut

// Appels AJAX
function login() {
  fetch('./backend/login.php', {
    method: 'POST',
    body: JSON.stringify({
      email: document.getElementById('email').value,
      password: document.getElementById('password').value
    }),
    headers: { 'Content-Type': 'application/json' }
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
        if (data.role === 'administrateur') {
          window.location.href = 'frontend/dashboard_admin.html';
        } else if (data.role === 'acheteur' || data.role === 'agriculteur' || data.role === 'fournisseur' || data.role === 'conseiller' || data.role === 'vendeur') {
          if (data.etat_user === 1) {
            errorDiv.textContent = "Accès refusé : votre compte est désactivé.";
          } else {
            window.location.href = 'frontend/dashboard_user.html';
          }
        }else {
          errorDiv.textContent = "Rôle inconnu.";
        }
      } else {
        errorDiv.textContent = data.message;
      }
  });
}

function register() {
    fetch('./backend/register.php', {
      method: 'POST',
      body: JSON.stringify({
        nom: document.getElementById('nom').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        role: document.getElementById('role').value
      }),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === 'success') {
        showLoginForm();
      } else {
        errorDiv.textContent = data.message;
      }
    })
    .catch(error => {
      console.error("Erreur fetch:", error);
      errorDiv.textContent = "Erreur lors de l'envoi du formulaire.";
    });
  }
  

function resetPassword() {
  fetch('./backend/reset_password.php', {
    method: 'POST',
    body: JSON.stringify({
      pwd: document.getElementById('pwd').value,
      pwdConfirm: document.getElementById('pwdConfirm').value
    }),
    headers: { 'Content-Type': 'application/json' }
  })
  .then(res => res.json())
  .then(data => {
    errorDiv.textContent = data.message;
  });
}
