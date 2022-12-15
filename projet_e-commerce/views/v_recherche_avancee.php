
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
</head>
<div>
    <?php
    if($estAdministrateur == true){
    echo "<button style='margin-left: 20px; margin-top: 20px; margin-bottom: 20px;' class='btn btn-outline-success' onclick=\"window.location.href='?uc=gererManga&action=ajouterManga&option=saisirManga'\">". $ajout ."</button>";
    }
    ?>
    <table class="table table-recherche">
                                <!--affichage de l'entête du tableau -->
        <tr>
        <th  scope="col"><?= $nom ?></th>
        <th scope="col"><?= $prix ?></th>
        <th scope="col"><?= $etat ?></th>                                    
        <th scope="col"><?= $annee ?></th>
        <th scope="col"><?= $auteur ?></th>
        <th scope="col"><?= $dessinateur ?></th>
        <th scope="col"><?= $couverture ?></th>
        <th scope="col"></th>
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
            <td scope="row"><?php echo $unManga->getNom_manga() ?></td>
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
            <td><button class="btn bg-primary text-light">
                    <a class="text-light" href="?uc=gererManga&action=consulterManga&id=<?php echo $unManga->getID() ?>"><?= $voir ?></a>
                </button>
            </td>
            <!-- <td><button class="btn bg-danger"><a href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>"> Supprimer </a></button></td> -->
            <?php
    if($estAdministrateur == true) 
    {
        ?>
        <td><button class="btn bg-danger text-light""><a class="text-light" href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>"><?= $supprimer ?></a></button></td>
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

</script>
