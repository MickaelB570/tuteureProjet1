<?php

include 'modele/MangaDal.class.php';
include 'modele/CommandeDal.class.php';

$tabErreurs = array();
$hasErrors = false;

if(isset($_GET["action"]))
{
    $action = $_GET['action'];
}
else
{
    $action = "consulterPanier";
}


switch($action)
{
    case "consulterPanier":
    {   
        include "views/v_panier.php";
    } break;
    case "ajoutUnVolume":
        {   
            $num = $_GET["num"];
            if(!empty($_SESSION['panier']['id']))
            {
                MangaDal::setStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num],MangaDal::getStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num])-1);
                ajouterArticle($_SESSION['panier']['nomManga'][$num],$_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num], 1, $_SESSION['panier']['prix'][$num]);
    
            }
         
            include "views/v_panier.php";
        } break;
    case "supprimerUnVolume":
    {   
        $num = $_GET["num"];
        
        if(!empty($_SESSION['panier']['id']))
        {
            MangaDal::setStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num],MangaDal::getStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num])+1);
            supprimerUnVolume($num);
        }


        include "views/v_panier.php";
    } break;
    case "supprimereDuPanier":
        {   
            $num = $_GET["num"];
            
            if(!empty($_SESSION['panier']['id']))
            {
                MangaDal::setStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num],MangaDal::getStock($_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num])+$_SESSION['panier']['qte'][$num]);
                supprimereDuPanier($num);
    
            }

            include "views/v_panier.php";
        } break;
    case "commander":
    {
        include "views/v_paiement.php";
    }
    break;
    case "paiementValider":
    {
        if($_SESSION['reussi']=="oui")
        {
            $id_Commande ="";
            $id_utilisateur = "";
            $prix_total="";
    
    
            if(isset($_GET['tr']))
            {
                $id_Commande = $_GET['tr'];
            } else 
            {
                $tabErreurs["Erreur"] = "L'id de la transaction n'a pas été transféré !";
                $tabErreurs["ID"] = "";
                $hasErrors = true;
            }
    
            if(isset($_SESSION['id_utilisateur']))
            {
                $id_utilisateur  = $_SESSION['id_utilisateur'];       
            } else 
            {
                $tabErreurs["Erreur"] = "Le nom d'utilisateur n'a pas été transféré !";
                $tabErreurs["ID"] = "";
                $hasErrors = true;
            }
    
            if(isset($_SESSION['panier']))
            {
                if(!empty($_SESSION['panier']['id']))
                {
                    $prix_total = $_SESSION['prixTotal'];
                } else 
                {
                    $tabErreurs["Erreur"] = "Le panier est vide !";
                    $tabErreurs["ID"] = "";
                    $hasErrors = true;
                }
            } else 
            {
                $tabErreurs["Erreur"] = "Le panier n'existe pas !";
                $tabErreurs["ID"] = "";
                $hasErrors = true;
            }
    
    
            if(!($hasErrors))
            {
                $res = CommandeDal::addCommande($id_Commande,$id_utilisateur,$prix_total);
                
    
                
                for($i = 0; $i < count($_SESSION['panier']['id']);$i++)
                {
                
                    $res2 = CommandeDal::addPanierCommande($id_Commande,$_SESSION['panier']['idManga'][$i],$_SESSION['panier']['idVolume'][$i],$_SESSION['panier']['qte'][$i]);
                
                }
    
                if ($res > 0) {
        
                    $msg = "Votre commande " . $id_Commande . " pour un prix de " . $prix_total . " euros a été passé !";
                    supprimerPanier();
                    $_SESSION['reussi'] = 'non';

                    include "views/_v_afficherMessage.php";
                } else {
                    $tabErreurs["Erreur"] = "une erreur s'est produite lors de l'opération d'ajout ";
                    $tabErreurs["idCommande"] = $id_Commande;
                    $tabErreurs["idUtilisateur"] = $id_utilisateur;
                    $tabErreurs["prixTotale"] = $prix_total;
                    $msg = "";
                    $lien = "";
                    $hasErrors = true;
                    include 'views/_v_afficherErreurs.php';
                }
            } else
            {
                $msg = "La commande est impossible";
                $lien = '<a href="?uc=gererPanier">retour à la saisie</a>';
               include 'views/_v_afficherErreurs.php';
            }
    
            include "views/v_paiementValider.php";
        } else
        {
            $msg = "Accès interdit";
            include 'views/_v_afficherErreurs.php';
        }
       
    }
    break;
    default:
        include 'views/v_panier.php';
    break;
}