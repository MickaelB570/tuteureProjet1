<?php

include 'modele/MangaDal.class.php';

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

            ajouterArticle($_SESSION['panier']['nomManga'][$num],$_SESSION['panier']['idManga'][$num],$_SESSION['panier']['idVolume'][$num], 1, $_SESSION['panier']['prix'][$num]);

            include "views/v_panier.php";
        } break;
    case "supprimerUnVolume":
    {   
        $num = $_GET["num"];
    
        supprimerUnVolume($num);
    
        include "views/v_panier.php";
    } break;
    case "supprimereDuPanier":
        {   
            $num = $_GET["num"];
        
            supprimereDuPanier($num);
        
            include "views/v_panier.php";
        } break;
    case "commander":
    {
        include "views/v_paiement.php";
    }
}