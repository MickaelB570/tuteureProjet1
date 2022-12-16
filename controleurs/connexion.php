<?php
include 'modele/connexion.class.php';
function Connexion(){
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
    case "connexion" :
        {
            if (isset($_GET["option"]) && $_GET["option"] != "") {
                $option = htmlentities($_GET["option"]);
                //echo $option;
                switch($option){
                    case 'validerSaisie':
                        {
                            
                            if (isset($_POST["valider"])) 
                            {
                                if (!empty($_POST["mail"])) $mail = htmlentities($_POST['mail']);
                                else $mail = null;
                                if (!empty($_POST["mdp"])) $mdp = htmlentities($_POST['mdp']);
                                else $mdp = null;
                                $estValide = Connexion::validerSaisie($mail, $mdp);
                                if($estValide === null) $estValide = Connexion::connexion($mail, $mdp);
                                return $estValide;
        }
    }}}}

}


}