<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="css/header.css" rel="stylesheet" />
<header>
<div class="search">
      <!-- <form class="d-flex" role="search"> -->
        <div class="d-flex">
        <input style="width: 40%;" class="form-control me-2" type="search" placeholder="Rechercher un manga" aria-label="Search">
        <button class="btn btn-outline-success bouton-rechercher" type="submit">Rechercher</button>
      <!-- </form> -->
      <button class="bouton_inscription" onclick="window.location.href='?uc=inscription'">Inscription</button>
		    <button class="bouton_connexion" onclick="window.location.href='?uc=connexion'">Connexion</button>
        <button class="bouton_panier" onclick="window.location.href='?uc=panier'">Panier</button>
</div>
  </div>
  <div class="barre_nav">
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?uc=gererManga">Recherche avancée</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?uc=contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?uc=qui_sommes_nous">Qui sommes-nous ?</a>
        </li>
      </ul>
  
    </div>
  </div>
</nav>
</div>
</header>