<div id="content">
    <?php
    // affichage du lien de retour
    if (strlen($lien) > 0) {
        echo $lien;
    }
    ?>
    <br /><br />
    <span class="info">
        <?php 
        if (strlen($msg) > 0) {
            echo $msg;
        }
        ?></span>
    <?php
    // affichage des erreurs   
    foreach ($tabErreurs as $erreur) {
        echo '<span class="dark erreur">'.$erreur.'</span>';
    }
    ?>
</div>
