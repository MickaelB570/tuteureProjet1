<?php
require_once 'include/_config.inc.php';
require_once  'include/_panier.php';
include "include/_reference.lib.php";
session_start();
$_SESSION["qte"] = 0;


if(isset($_SESSION["nom_utilisateur"])) $nom_u = $_SESSION["nom_utilisateur"];
else $nom_u = "";
$estAdministrateur = false;
if(isset($_SESSION["estAdministrateur"])){
$testAdministrateur = $_SESSION["estAdministrateur"];
//echo $testAdministrateur; 
if($testAdministrateur == 1) $estAdministrateur = true;
else $estAdministrateur = false;
}
else $estAdministrateur = false;
include("./vendor/autoload.php");












if (isset($_GET['uc'])){
    $uc = $_GET['uc'];
}else
{
    $uc = 'home';
}
if (isset($_POST["rechercher"])){ 
    $recherche = htmlentities(trim($_POST["recherche"]));
    header('Status: 301 Moved Permanently', false, 301); 
    header('Location: ?uc=gererManga&search='.$recherche);
}
if (isset($_POST["bouton_langue"])){
    $langue = $_POST["langue"];
    $_SESSION["langue"] = $langue;
    //echo $langue;
    if($langue == "en"){
        include("include/_anglais.php");
    }else{
        include("include/_francais.php");
    }
}else{
    if(isset($_SESSION["langue"])) $langue = $_SESSION["langue"];
    else $langue = "fr";
    if($langue == "en"){
        include("include/_anglais.php");
    }else{
        include("include/_francais.php");
    }
}
switch($uc)
{
    case "inscription":
        include 'views/v_header.php';
        include('controleurs/inscription.php');
		$estValide = Inscription();
		include('views/inscription.php');
        include 'views/v_footer.php';
        break;
    case "connexion":
        include 'views/v_header.php';
        include('controleurs/connexion.php');
        $estValide = Connexion();
        include('views/connexion.php');
        include 'views/v_footer.php';
        break;
    case "gererManga":
        include 'views/v_header.php';
        include 'controleurs/c_gererManga.php';
        include 'views/v_footer.php';
        break;
    case "gererPanier":
        include 'views/v_header.php';
        include 'controleurs/c_gererPanier.php';
        include 'views/v_footer.php';
        break;
    case "gererCommande":
        include 'views/v_header.php';
        include 'controleurs/c_gererCommande.php';
        include 'views/v_footer.php';
        break;
    case "deconnexion":
        $_SESSION["nom_utilisateur"]="";
		$_SESSION['id_utilisateur']= "";
		$_SESSION['estAdministrateur']="";
        header('Status: 301 Moved Permanently', false, 301); 
        header('Location: ./');
        break;
    case "contact":
        {
            include 'views/v_header.php';
            include 'views/v_contact.php';
            include 'views/v_footer.php';
        }
        break;
    case "qui":
        {
            include 'views/v_header.php';
            include 'views/v_qui.php';
            include 'views/v_footer.php';
        }
        break;
    default:
        include 'views/v_header.php';
        include 'controleurs/c_homepage.php';
        include 'views/v_footer.php';
        break;
}

