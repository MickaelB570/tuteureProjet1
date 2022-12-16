<?php


?>
    <h1 class="text-center"><?= $titre_com ?></h1>
    <table class="table">
    <tr>
        <th>ID <?= $commande_client ?></th>
        <th>ID <?= $id_User ?></th>
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
            <td><?= $uneCommande->getID_utilisateur() ?></td>
            <td><?= $uneCommande->getPrixTotal() ?>€</td>
            <?php
                if($uneCommande->getEstLivre() == 1)
                {
            ?>
                <td><button class="btn btn-success"><a class="text-light" href="?uc=gererCommande&action=listerCommandeUtilisateurAdmin&id=<?= $uneCommande->getID_commande() ?>&livre=0"><?= $livre_m ?></a></button></td>
            <?php
                } else
                {
            ?>
                <td><button class="btn btn-warning"><a class="text-light" href="?uc=gererCommande&action=listerCommandeUtilisateurAdmin&id=<?= $uneCommande->getID_commande() ?>&livre=1"><?= $pasLivre ?></a></button></td>
            <?php
                }
            ?>
                <td><button class="btn btn-primary"><a class="text-light" href="?uc=gererCommande&action=detailCommande&id=<?=  $uneCommande->getID_commande() ?>&idUti=<?= $uneCommande->getID_utilisateur() ?>"><?= $voir ?></a></button></td>
        </tr>
    <?php
}



?>

    </table>

