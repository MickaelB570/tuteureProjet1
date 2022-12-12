<?php
use \Defuse\Crypto\Crypto;
use \Defuse\Crypto\Key;
class Connexion{

    public static function validerSaisie($mail, $mdp){

        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

                if (trim($mail)==null){
                return "adresse email invalide!<br />";
                die();	
                }
                if (strlen(trim($mail))>500){
                return "adresse email invalide!<br />";
                die();	
                }
                if (trim($mdp)==null){
                return "mot de passe invalide!<br />";
                die();	
                }
                if (strlen(trim($mdp))>500){
                return "mot de passe invalide!<br />";
                die();	
                }
                if (strpos($mail,"@")==false){
                return "adresse email invalide!<br />";
                die();	
                }
                if (strpos($mail,".")==false){
                return "adresse email invalide!<br />";
                die();	
                }
    
        return null;

    }

    public static function connexion($mail, $mdp){
    include 'key.php';
    require "./vendor/autoload.php";
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
            $mail = trim($mail);
            $mdp = trim($mdp);
            $test = NULL;
            $verif = false;
            $var = $objPdo->query('SELECT * FROM utilisateur');
    while($row = $var->fetch())
    {
	if($mail == $row['email_utilisateur']){
    $mdp_bdd = Crypto::decrypt($row['mdp_utilisateur'], $key);
	if($mdp == $mdp_bdd){
			$verif = true;
          $test = $row['id_utilisateur'];
          $_SESSION["nom_utilisateur"]=$row["nom_utilisateur"] ;
		   $_SESSION['id_utilisateur']= $test;
		   $_SESSION['estAdministrateur']=$row["estAdministrateur"];
           //return "ok google"; 
		   break;
			}
			else {
			return "Erreur d'identification!<br />";
			die();
			}
	} }
   


if($verif == false){
	return "Erreur d'identification!<br />";
	die();
}
    header('Status: 301 Moved Permanently', false, 301); 
    header('Location: ./');
   

    }

}