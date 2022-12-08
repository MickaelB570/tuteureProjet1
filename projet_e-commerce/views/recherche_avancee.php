

<div>
 
    <table>
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
        </tr>
    <?php

        foreach($lesMangas as $unManga)
        {
            ?>
            <tr>
            <td><?php echo $unManga->getNom_manga() ?></td>
            <!-- afficher les colonnes suivantes -->
            <td><?php echo $unManga->getPrix() ?> </td>
            <td><?php echo $unManga->getStock() ?> </td>
            <td><?php echo $unManga->getEtat() ?> </td>
            <td><?php echo $unManga->getAnnee() ?> </td>
            <td><?php echo $unManga->getAuteur() ?> </td>
            <td><?php echo $unManga->getDessinateur() ?> </td>
            <td><img width="150px" src="<?php echo $unManga->getLien_image() ?> "> </img></td>
        </tr>
    <?php
        }

    ?>
    </table>
</div>