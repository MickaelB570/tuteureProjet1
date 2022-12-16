<?php



?>

<h1 class="text-center">Détail de la commande <?= $_GET['id']  ?></h1>

<Table class="table">
    <tr>
        <th>Nom du manga</th>
        <th>Numéro du volume</th>
        <th>Quantité</th>
        <th>Prix</th>
    </tr>
    <?php
    foreach($lesCommandes as $uneCommande)
    {
        ?>
    <tr>
        <td><?= $uneCommande->getNom_manga(); ?></td>
        <td><?= $uneCommande->getNum_volume(); ?></td>
        <td><?= $uneCommande->getQTE(); ?></td>
        <td><?= $uneCommande->getPrix(); ?>€</td>
    </tr>
        <?php
    }
    ?>
</Table>