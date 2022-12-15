
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
</head>
<div>
    <?php
    if($estAdministrateur == true){
    echo "<button style='margin-left: 20px; margin-top: 20px;' class='btn btn-outline-success' onclick=\"window.location.href='?uc=gererManga&action=ajouterManga&option=saisirManga'\">". $ajout ."</button>";
    }
    ?>
    <table class="table-recherche">
                                <!--affichage de l'entête du tableau -->
        <tr>
        <th><?= $nom ?></th>
        <th><?= $prix ?></th>
        <th><?= $etat ?></th>                                    
        <th><?= $annee ?></th>
        <th><?= $auteur ?></th>
        <th><?= $dessinateur ?></th>
        <th><?= $couverture ?></th>
        <th></th>
        <?php
    if($estAdministrateur == true) 
    {
        ?>
        <th></th>
    <?php } ?>
        </tr>
    <?php

        foreach($lesMangas as $unManga)
        {
            $cmp = $unManga->getNom_manga();
            if($cmp == $search || stristr($cmp,$search)){
            
            ?>
            <tr>
            <td><?php echo $unManga->getNom_manga() ?></td>
            <!-- afficher les colonnes suivantes -->
            <td><?php echo $unManga->getPrix(). "€" ?> </td>
            <?php
            if($unManga->getEtat() == 1)
            {
            ?>
            <td><p > en cours</p></td>
            <?php
            } else
            {
            ?>
            <td><p > Fini</p></td>
            <?php
            }
            ?>  
            <td><?php echo $unManga->getAnnee() ?> </td>
            <td><?php echo $unManga->getAuteur() ?> </td>
            <td><?php echo $unManga->getDessinateur() ?> </td>
            <td><img width="150px" src="<?php echo $unManga->getLien_image() ?> "> </img></td>
            <td><button class="bg-primary text-light">
                    <a class="text-light" href="?uc=gererManga&action=consulterManga&id=<?php echo $unManga->getID() ?>"><?= $voir ?></a>
                </button>
            </td>
            <!-- <td><button class="btn bg-danger"><a href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>"> Supprimer </a></button></td> -->
            <?php
    if($estAdministrateur == true) 
    {
        ?>
        <td><button class="btn bg-danger text-light" onclick="validationSuppresssion()"><?= $supprimer ?></button></td>
        <?php
    } 
    ?>
        </tr>
    <?php
            }
        }

    ?>
    </table>
</div>



<script>

	let nom_manga = document.getElementsByTagName("td");
	for(let i=0; i<nom_manga.length; i++){
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€™", "'");
		nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("â€", " ");
        nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("ã€‡", "O");
        nom_manga[i].innerHTML = nom_manga[i].innerHTML.replaceAll("âˆ€", "");
	}

function validationSuppresssion(){
if ( confirm( "<?= $msg_sup ?>" ) ) {
    location.href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>";
} else {
   
}
}

function voirPlus()
{
    location.href="?uc=gererManga&action=consulterManga&id=<?php echo $unManga->getID() ?>";
}
</script>
