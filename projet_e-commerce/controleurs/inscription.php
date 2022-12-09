<?php
include 'modele/inscription.class.php';
function Inscription(){
    $estValide = "";
if(isset($_GET["action"]))
{
    $action = htmlentities($_GET['action']);
}
else
{
    $action = "";
}
switch ($action) {
    case "inscription" :
        {
            //$lesGenres = GenreDal::loadGenres(1);
            //$nbGenres = count($lesGenres);
            //echo 'test ok';

            if (isset($_GET["option"]) && $_GET["option"] != "") {
                $option = htmlentities($_GET["option"]);
                //echo $option;
                switch($option){
                    case 'validerSaisie':
                        {
                            
                            if (isset($_POST["valider"])) 
                            {
                                if (!empty($_POST["nom"])) $nom = htmlentities($_POST['nom']);
                                else $nom = null;
                                if (!empty($_POST["mail"])) $mail = htmlentities($_POST['mail']);
                                else $mail = null;
                                if (!empty($_POST["mdp"])) $mdp = htmlentities($_POST['mdp']);
                                else $mdp = null;
                                $estValide = Inscription::validerSaisie($nom, $mail, $mdp);
                                $estAdministrateur = 0;
                                if($estValide === null) Inscription::insererSaisie($nom, $mail, $mdp, $estAdministrateur);
                                return $estValide;
                                
                            }
                        }
            }

        }
        return $estValide;
        break;
    }
    return $estValide;
}
}