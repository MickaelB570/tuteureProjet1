

<div class="bg-test">
        <p class="titre"><?php echo $leManga->getNom_manga(); ?></p>
        <div class="div-image">
            <img class="image" src="<?php echo $leManga->getLien_image(); ?>">
        </div>
        <p class="description"><?php echo $leManga->getDescription(); ?></p>
        
        <div class="bg-info-manga">
           <table>
                <tr>
                    <td><p  class="auteur"><?= $auteur ?> : <?php echo $leManga->getAuteur(); ?></p></td>
                </tr>
                <tr>
                    <td><p class="annee"><?= $annee ?> : <?php echo $leManga->getAnnee(); ?></p></td>
                </tr>
                <tr>
                    <td><p class="pays"><?= $pays ?> : <?php echo $leManga->getPays(); ?></p></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><p class="dessinateur"><?= $dessinateur ?> : <?php echo $leManga->getDessinateur(); ?></p></td>
                </tr>
                <tr>
                    <td><p  class="stock"><?= $genre ?> : <?php 
                    /*foreach($lesGenres as $unGenre)
                    {
                        echo  $unGenre .  " ";
                    }
                    */
                    for($i = 0;$i < count($lesGenres);$i++)
                    {
                        if($i < count($lesGenres)-1) echo $lesGenres[$i]->nom_categ.", ";
                        else echo $lesGenres[$i]->nom_categ;
                    }
                    
                    ?></p></td>
                </tr>
                <tr>
                    <td><p class="etat"><?= $etat ?> : <?php echo $leManga->getEtat(); ?></p></td>
                </tr>
            </table>
    </div>
    </div>
    <?php
    if($estAdministrateur == true) 
    {
        echo "<button style='margin-left: 70%; margin-top: 20px;' class='btn btn-outline-success' onclick=\"window.location.href='?uc=gererManga&action=ajouterVolume&option=saisirVolume&id=".$leManga->getID()."'\">". $ajoutVolume ."</button><br>";
        ?>
    <div class="btn-modifier">
        <button class="btn bg-warning text-light"><a href="?uc=gererManga&action=modifierManga&id=<?php echo $leManga->getID() ?>"> <?= $modifier ?> </a></button>
        
    </div>
    <?php
    }
    ?>
    <div>
        <div class="bg-volume">
            <?php
            for($i = $nbVolume;$i >= 1 ;$i--)
            {
            ?>
            <div class="bg-unVolume">
                <p class="margin-auto ">Volume <?=  $i; ?></p>
                <p class="margin-auto "><?= $prix ?> : <?= $leManga->getPrix(); ?> €</p>
                <p class="margin-auto ">Stock : <?= $tabStock[$i] ?></p>
              <?php  if($estAdministrateur == true) echo "<button class='btn btn-warning' onclick=\"window.location.href='?uc=gererManga&action=modifierVolume&vol=".$i."&id=".$leManga->getID()."'\">". $stock_modif ."</button>"; ?>
                <button class="margin-auto bg-primary text-light"><?= $ajout_panier ?></button>
            </div>
            <?php
            }
            ?>
        </div>
        
    </div>