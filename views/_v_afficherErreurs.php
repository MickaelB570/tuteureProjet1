<div id="content">
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
