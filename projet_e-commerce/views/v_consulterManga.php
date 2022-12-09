<div>
    <p> <?php echo $leManga->getNom_manga(); ?></p>
    <p> <?php echo $leManga->getDescription(); ?></p>
    <p> <?php echo $leManga->getPrix(); ?></p>
    <p> <?php echo $leManga->getStock(); ?></p>
    <p> <?php echo $leManga->getAuteur(); ?></p>
    <p> <?php echo $leManga->getDessinateur(); ?></p>
    <p> <?php echo $leManga->getPays(); ?></p>
    <p> <?php echo $leManga->getAnnee(); ?></p>
    <img width="150px"  src="<?php echo $leManga->getLien_image(); ?>"></img>
</div>