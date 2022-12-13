<div class="bg-modifier text-center">
        <form action="index.php?uc=gererManga&action=modifierManga&id=<?php echo $intID; ?>&option=validerManga"
            method="post">
            <table>
                <h1 class=""><?= $titre_modif ?></h1>
                <label>ID</label>
                <br>
                <input class="input-modifier " type="text" id="txtID" name="txtID" size="5" readonly="readonly" value="<?php echo $intID ?>" />
                <br>
                <label><?= $nom ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtNom" name="txtNom" size="5" value="<?php echo $strNom ?>" />
                <br>
                <label><?= $prix ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtPrix" name="txtPrix" size="5" value="<?php echo $floatPrix ?>" />
                <br>
                <label>description</label>
                <br>
                <input class="input-modifier-description "  type="text" id="txtDescription" name="txtDescription" size="5"
                    value="<?php echo $strDescription ?>" />
                <br>
                <label><?= $etat ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtEtat" name="txtEtat" size="5" value="<?php echo $intEtat ?>" />
                <br>
                <label><?= $annee ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtAnnee" name="txtAnnee" size="5" value="<?php echo $intAnnee ?>" />
                <br>
                <label><?= $auteur ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtAuteur" name="txtAuteur" size="5" value="<?php echo $strAuteur ?>" />
                <br>
                <label><?= $dessinateur ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtDessinateur" name="txtDessinateur" size="5" value="<?php echo $strDessinateur ?>" />
                <br>
                <label><?= $pays ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtPays" name="txtPays" size="5" value="<?php echo $intPays ?>" />
                <br>
                <label><?= $couverture ?></label>
                <br>
                <input class="input-modifier "  type="text" id="txtLien" name="txtLien" size="5" value="<?php echo $strLien ?>" />
                <br>
            </table>
            <input class="input-modifier-valider bg-warning" id="cmdValider" name="cmdValider" type="submit" value="<?= $modifier ?>" />
            </forms>
    </div>



