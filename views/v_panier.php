
<?php if($nom_u != "") { ?>
<button class="btn btn-primary mt-3 mr-3 titre-modifier-panier"><a class="text-light" href="?uc=gererCommande&action=listerCommandeUtilisateur"><?= $commandes ?></a></button>
<?php } ?>

<?php if($estAdministrateur == true) { ?>
<button class="btn btn-success mt-3 mr-3 titre-modifier-panier"><a class="text-light" href="?uc=gererCommande&action=listerCommandeUtilisateurAdmin"><?= $commandes ?> admin</a></button>
<?php } ?>


<div class="titre-modifier-panier">
    <h1><?= $panier ?> : </h1>
</div>
<?php 

    $sum = 1;
    if(!empty($_SESSION['panier']['id']))
    {
?>
<div class="bg-volume-panier">
<?php

for($i = 0; $i < count($_SESSION['panier']['id']);$i++)
{
    
    $sum += ($_SESSION['panier']['prix'][$i] * $_SESSION['panier']['qte'][$i]) + (1 * $_SESSION['panier']['qte'][$i]);
    $_SESSION['prixTotal'] = $sum;
    ?>
    
    <div class="bg-unVolume-panier">
        <p class="margin-auto "> <?=  $_SESSION['panier']['nomManga'][$i] ?></p>
        <p class="margin-auto ">Volume <?=  $_SESSION['panier']['idVolume'][$i] ?></p>
        <p class="margin-auto "><?= $prix ?> : <?= $_SESSION['panier']['prix'][$i] ?> €</p>
        <p class="margin-auto "><?= $quantite ?> : <?= $_SESSION['panier']['qte'][$i] ?></p>
        <button class="btn btn-outline-success margin-auto text-decoration-none"><a href="?uc=gererPanier&action=ajoutUnVolume&num=<?= $i ?>">+</a></button>
        <button class="btn btn-outline-warning margin-auto text-decoration-none"><a href="?uc=gererPanier&action=supprimerUnVolume&num=<?= $i ?>">-</a></button>
        <button class="btn btn-danger margin-auto "><a class="text-light text-decoration-none" href="?uc=gererPanier&action=supprimereDuPanier&num=<?= $i ?>"><?= $supprimer ?></a></button>
    </div>
    <script>
        let nom_manga = document.getElementsByTagName("p");
	for(let i=0; i<nom_manga.length; i++){
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€™", "'");
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€", " ");
        nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("ã€‡", "O");
        nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("âˆ€", "");
	}
    </script>

    <?php


}

?>
</div>
<div class="btn-modifier-panier">
    <button class="btn btn-success text-light "><a class="text-light text-decoration-none" 
    <?php if($nom_u == "") {
         
        ?> href="?uc=connexion"  <?php 
    }else
    { ?> 
    href="?uc=gererPanier&action=commander" <?php 
} ?>><?= $payer ?> <?= $sum  ?>€ (<?= $frais ?>)</a></button>
</div>
<?php
    } else
    {
        ?>
            <h1 class='text-center mt-5 mb-5'><?= $panier_vide ?></h1>
        <?php
    }
?>
