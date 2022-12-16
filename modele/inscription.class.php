<?php
use \Defuse\Crypto\Crypto;
use \Defuse\Crypto\Key;
class Inscription{

    public static function validerSaisie($nom, $mail, $mdp , $mdp2, $nom_bdd){
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname='.$nom_bdd.';charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
            if (trim($nom)==null){
            return "nom invalide!<br />";
            die();	
            }
            if (strlen(trim($nom))>100){
            return "nom invalide!<br />";
            die();	
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

            if (trim($mdp2)==null){
            return "mot de passe invalide!<br />";
            die();	
            }
            if (strlen(trim($mdp2))>500){
            return "mot de passe invalide!<br />";
            die();	
            }
            if($mdp != $mdp2){
            return "les mots de passe sont différents!<br />";
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

            $var2 = $objPdo->query('SELECT email_utilisateur FROM utilisateur');

            while($row = $var2->fetch())
            {
            if($mail == $row['email_utilisateur'] ){
			return "Il y a déjà une personne qui utilise cette adresse mail !<br />";
			die();
        
            }
            }

            return null;
    }
    public static function insererSaisie($nom, $mail, $mdp, $estAdministrateur, $nom_bdd){
    include 'key.php';
    require "./vendor/autoload.php";
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname='.$nom_bdd.';charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $nom = trim($nom);
        $mail = trim($mail);
        $mdp = trim($mdp);
        $mdp2 = Crypto::encrypt($mdp, $key); //chiffre le mdp
        $insert=$objPdo->prepare('INSERT INTO utilisateur (nom_utilisateur, email_utilisateur, mdp_utilisateur, estAdministrateur) VALUES (?,?,?,?)');
        $insert->execute(array($nom, $mail, $mdp2, $estAdministrateur));
        //$plainText = Crypto::decrypt($mdp2, $key); //déchiffre le mdp
        //echo $plainText;
        header('Location: ?uc=connexion');

    }
    }