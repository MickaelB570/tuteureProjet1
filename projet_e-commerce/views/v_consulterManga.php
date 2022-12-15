

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
                    <?php
                        if($leManga->getPays() == 1)
                        {
                            ?>
                                <td><p class="pays"><?= $pays ?> : Japon</p></td>
                            <?php
                        } else
                        {
                            ?>
                            <td><p class="pays"><?= $pays ?> : Inconnu</p></td>
                            <?php
                        }
                    ?>

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
                <?php
                        if($leManga->getEtat() == 1)
                        {
                            ?>
                            <td><p class="etat"><?= $etat ?> : en cours</p></td>
                            <?php
                        } else
                        {
                            ?>
                            <td><p class="etat"><?= $etat ?> : Fini</p></td>
                            <?php
                        }
                    ?>                </tr>
            </table>
    </div>
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
    if($estAdministrateur == true) 
    {
        ?>
    <div class="btn-modifier">
        <button class="btn bg-warning text-light"><a href="?uc=gererManga&action=modifierManga&id=<?php echo $leManga->getID() ?>"> <?= $modifier ?> </a></button>
        
    </div>
    <div class="btn-modifier">
        <?php
        echo "<button class='btn btn-outline-success' onclick=\"window.location.href='?uc=gererManga&action=ajouterVolume&option=saisirVolume&id=".$leManga->getID()."'\">". $ajoutVolume ."</button><br>";
        echo $msg_ajout_panier;
        ?>
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
              <?php  if($estAdministrateur == true){ ?>
              <button class=" margin-auto btn bg-danger text-light" onclick=' if ( confirm( "<?= $supprimer_vol ?>" ) ) location.href="?uc=gererManga&action=supprimerVolume&vol=<?= $i ?>&id=<?php echo $leManga->getID() ?>";'><?= $supprimer ?></button> 
             
             <?php } ?> 
             <!-- <a href="./include/_panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a> -->



              <button class="margin-auto bg-primary text-light" onclick="" ><a class="text-light" href="?uc=gererManga&action=consulterManga&id=<?php echo $leManga->getID() ?>&panier=ajouter&vol=<?= $i ?>"><?= $ajout_panier ?></a>
                </button>
            </div>
            <?php
            }
            ?>
        </div>
        
    </div>