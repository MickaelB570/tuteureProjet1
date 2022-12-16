<?php


?>
    <h1 class="text-center"><?= $commandes ?></h1>
    <table class="table">
    <tr>
        <th>ID <?= $commande_client ?></th>
        <th><?= $prix ?></th>
        <th><?= $livraison ?></th>
        <th></th>
    </tr>

<?php

foreach($lesCommandes as $uneCommande)
{

    ?>
        <tr>
            <td><?= $uneCommande->getID_commande() ?></td>
            <td><?= $uneCommande->getPrixTotal() ?>€</td>
            <?php
                if($uneCommande->getEstLivre() == 1)
                {
            ?>
                <td><?= $livraison_fini ?> !</td>
            <?php
                } else
                {
            ?>
                <td><?= $livraison_cours ?> !</td>
            <?php
                }
            ?>
                <td><button class="btn btn-primary"><a class="text-light" href="?uc=gererCommande&action=detailCommande&id=<?=  $uneCommande->getID_commande() ?>"><?= $voir ?></a></button></td>
        </tr>
    <?php
}



?>

    </table>

