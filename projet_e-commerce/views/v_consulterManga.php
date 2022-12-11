

<div class="bg-test">
        <p class="titre"><?php echo $leManga->getNom_manga(); ?></p>
        <div class="div-image">
            <img class="image" src="<?php echo $leManga->getLien_image(); ?>">
        </div>
        <p class="description"><?php echo $leManga->getDescription(); ?></p>
        
        <div class="bg-info-manga">
           <table>
                <tr>
                    <td><p  class="auteur">Auteur : <?php echo $leManga->getAuteur(); ?></p></td>
                </tr>
                <tr>
                    <td><p class="annee">Année : <?php echo $leManga->getAnnee(); ?></p></td>
                </tr>
                <tr>
                    <td><p class="pays">Pays : <?php echo $leManga->getPays(); ?></p></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><p class="dessinateur">Dessinateur : <?php echo $leManga->getDessinateur(); ?></p></td>
                </tr>
                <tr>
                    <td><p  class="stock">Stock : <?php echo $leManga->getStock(); ?></p></td>
                </tr>
                <tr>
                    <td><p class="etat">Etat : <?php echo $leManga->getEtat(); ?></p></td>
                </tr>
            </table>
    </div>
    </div>
    <?php
    if($estAdministrateur == true) 
    {
        ?>
    <div class="btn-modifier">
        <button class="btn bg-warning text-light"><a href="?uc=gererManga&action=modifierManga&id=<?php echo $leManga->getID() ?>"> Modifier </a></button>
    </div>
    <?php
    }
    ?>
    <div>
        <div class="bg-volume">
            <?php
            $nbVolume = 5;
            for($i = 1;$i < $nbVolume ;$i++)
            {
            ?>
            <div class="bg-unVolume">
                <p class="margin-auto ">Volume <?=  $i; ?></p>
                <p class="margin-auto ">Prix <?= $leManga->getPrix(); ?> euros</p>
                <button class="margin-auto bg-primary text-light">Ajouter au panier</button>
            </div>
            <?php
            }
            ?>
        </div>
        
    </div>