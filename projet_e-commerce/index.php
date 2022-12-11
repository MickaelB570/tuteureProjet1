<?php

require_once 'include/_config.inc.php';
include "include/_reference.lib.php";

session_start();
$langue = 0;
if(isset($_SESSION["nom_utilisateur"])) $nom = $_SESSION["nom_utilisateur"];
else $nom = "";
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

    case "deconnexion":
        session_destroy() ;
        session_start() ;
        header('Status: 301 Moved Permanently', false, 301); 
        header('Location: ./');
        break;

    default:
        include 'views/v_header.php';
        include 'views/homepage.php';
        include 'views/v_footer.php';
        break;
}

