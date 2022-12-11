
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
</head>
<div>
    <?php
    if($estAdministrateur == true) echo "<button style='margin-left: 20px;' class='btn btn-outline-success' onclick=\"window.location.href='?uc=gererManga&action=ajouterManga&option=saisirManga'\">Ajouter un manga</button><br>";
    ?>
    <table class="table-recherche">
                                <!--affichage de l'entête du tableau -->
        <tr>
        <th>Nom Manga</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Etat</th>                                    
        <th>Année</th>
        <th>Auteur</th>
        <th>Dessinateur</th>
        <th>Image</th>
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
            <td><?php echo $unManga->getStock() ?> </td>
            <td><?php echo $unManga->getEtat() ?> </td>
            <td><?php echo $unManga->getAnnee() ?> </td>
            <td><?php echo $unManga->getAuteur() ?> </td>
            <td><?php echo $unManga->getDessinateur() ?> </td>
            <td><img width="150px" src="<?php echo $unManga->getLien_image() ?> "> </img></td>
            <td><button class="bg-primary text-light" onclick="voirPlus()"> Voir plus </a></button></td>
            <!-- <td><button class="btn bg-danger"><a href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>"> Supprimer </a></button></td> -->
            <?php
    if($estAdministrateur == true) 
    {
        ?>
        <td><button class="btn bg-danger text-light" onclick="validationSuppresssion()"> Supprimer</button></td>
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
function validationSuppresssion(){
if ( confirm( "Voulez-vous vraiment supprimer ce manga ?" ) ) {
    location.href="?uc=gererManga&action=supprimerManga&id=<?php echo $unManga->getID() ?>";
} else {
   
}
}

function voirPlus()
{
    location.href="?uc=gererManga&action=consulterManga&id=<?php echo $unManga->getID() ?>";
}
</script>
