<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Offres d'Emploi Agricole</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #fefcf6;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    header {
      background-color: #e7f1de;
      padding: 60px 0;
      text-align: center;
      box-shadow: 0 2px 8px rgba(102, 77, 38, 0.1);
      margin-bottom: 30px;
      color: #4b5320;
    }
    header h2 {
      font-size: 2.8rem;
      font-weight: 700;
      color: #3a4d12;
    }
    header p {
      font-size: 1.2rem;
      color: #7a7a4f;
    }
    .job-card {
      border-radius: 15px;
      background: #fffdf5;
      box-shadow: 0 10px 20px rgba(102, 77, 38, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      padding: 1.5rem;
      position: relative;
      border: 1px solid #d9d5c3;
    }
    .job-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(102, 77, 38, 0.3);
      border-color: #7a7a4f;
    }
    .job-card h5 {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 0.8rem;
      color: #4b5320;
    }
    .job-details {
      font-size: 1rem;
      color: #5e5e3b;
      margin-bottom: 1.25rem;
      line-height: 1.4;
    }
    .badge-contract {
      position: absolute;
      top: 1.2rem;
      right: 1.2rem;
      background-color: #789262;
      color: #fff7e6;
      font-weight: 600;
      padding: 0.3rem 0.9rem;
      border-radius: 50px;
      font-size: 0.85rem;
      box-shadow: 0 3px 8px rgba(120, 146, 98, 0.5);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    .btn-apply {
      align-self: flex-start;
      background: linear-gradient(90deg, #a3b86c 0%, #6f8631 100%);
      color: white;
      border: none;
      padding: 0.5rem 1.5rem;
      font-weight: 600;
      border-radius: 30px;
      font-size: 1rem;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(111, 134, 49, 0.5);
      transition: background 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }
    .btn-apply:hover {
      background: linear-gradient(90deg, #6f8631 0%, #a3b86c 100%);
      box-shadow: 0 8px 25px rgba(111, 134, 49, 0.75);
      color: white;
      text-decoration: none;
    }
    .btn-apply i {
      font-size: 1.2rem;
    }
    main.container {
    margin-bottom: 40px;
    }

  </style>
</head>
<body>

<header>
  <h2>Emplois dans le secteur agricole</h2>
  <p>Offres d’emploi disponibles dans l’agriculture et l’agro-industrie.</p>
</header>

<main class="container">
  <div class="row g-4">
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDI</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Ingénieur agronome</h5>
        <p class="job-details">
          Entreprise : AgroPlus<br/>
          Lieu : Yaoundé<br/>
          Salaire : 350 000 FCFA/mois
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDD</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Technicien en agroécologie</h5>
        <p class="job-details">
          Entreprise : GreenAgro<br/>
          Contrat : CDD, 6 mois<br/>
          Lieu : Douala
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">Stage</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Assistant agriculteur</h5>
        <p class="job-details">
          Entreprise : TerreVerte<br/>
          Lieu : Bafoussam<br/>
          Durée : 3 mois, gratification possible
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDI</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Ouvrier agricole</h5>
        <p class="job-details">
          Lieu : Foumbot<br/>
          Salaire : 100 000 FCFA/mois
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDD</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Responsable irrigation</h5>
        <p class="job-details">
          Entreprise : AgriTech<br/>
          Contrat : 1 an<br/>
          Lieu : Ngaoundéré
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">Freelance</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Consultant en agriculture durable</h5>
        <p class="job-details">
          Projet : EcoFarms<br/>
          Lieu : Région de l'Ouest
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDI</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Chef de production agricole</h5>
        <p class="job-details">
          Entreprise : AgroDéveloppement<br/>
          Lieu : Garoua<br/>
          Salaire : 400 000 FCFA/mois
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDD</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Formateur en techniques agricoles</h5>
        <p class="job-details">
          Organisation : AgriFormation<br/>
          Contrat : 6 mois<br/>
          Lieu : Kribi
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">Stage</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Assistant technicien agricole</h5>
        <p class="job-details">
          Entreprise : BioAgro<br/>
          Lieu : Limbe<br/>
          Durée : 4 mois
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="job-card">
        <span class="badge-contract">CDI</span>
        <h5><i class="bi bi-briefcase-fill me-2 text-success"></i>Gestionnaire de ferme</h5>
        <p class="job-details">
          Exploitation : Green Fields<br/>
          Lieu : Bertoua<br/>
          Salaire : 300 000 FCFA/mois
        </p>
        <a href="#" class="btn-apply"><i class="bi bi-arrow-right-circle"></i> Postuler</a>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
