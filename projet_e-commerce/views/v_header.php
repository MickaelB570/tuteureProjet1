<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link href="css/header.css" rel="stylesheet" />
<link rel="stylesheet" href="css/burger-menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="./">MangaStore</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="./"><?= $accueil ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?uc=gererManga"><?= $Rechercher2 ?></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="?uc=contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?uc=qui_sommes_nous"><?= $qui ?></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" >
              <input class="form-control mr-sm-2" name="recherche" type="search" placeholder="<?= $Recherche ?>">
              <button class="btn btn-outline-success my-2 my-sm-0" name="rechercher" type="submit"><?= $Rechercher ?></button>
            </form>
            <?php if($nom_u == "") { ?> 
              <li><button class="btn bg-primary"><a class="text-light" href="?uc=connexion"><?= $connexion ?></a></button></li><?php }
            else { ?> 
              <li><button class="btn bg-danger"><a class="deconnexion text-light"  onclick="validationDeconnexion()"><?= $deconnexion ?></a></button></li> 
            <?php } ?>
            <a href="?uc=gererPanier&action=consulterPanier"><img class="navbar-img ml-3" src="./images/panier.png" alt=""></a>
            <form method="post">
            <select name="langue" class="form-select ml-3" aria-label="Default select example">
              <option selected value="fr">FR</option>
              <option value="en">EN</option>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" name="bouton_langue"><?= $traduction ?></button>
            </form>
          </div>
      </nav>
</header>


<script>
function validationDeconnexion(){
if ( confirm(" <?= $msg_deco ?> ") ) {
    location.href="?uc=deconnexion";
} else {
   
}
}
</script>


