<?php

require_once 'include/_config.inc.php';
include "include/_reference.lib.php";


session_start();
if(isset($_SESSION["nom_utilisateur"])) $nom = $_SESSION["nom_utilisateur"];
else $nom = "";
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
switch($uc)
{
    case "inscription":
        include 'views/v_header.php';
        include('controleurs/inscription.php');
		$estValide = Inscription();
		include('views/inscription.php');
        break;
    case "connexion":
        include 'views/v_header.php';
        include('controleurs/connexion.php');
        $estValide = Connexion();
        include('views/connexion.php');
        break;
    case "gererManga":
        include 'views/v_header.php';
        include 'controleurs/c_gererManga.php';
        break;

    default:
        include 'views/v_header.php';
        include 'views/homepage.php';
        include 'views/v_footer.php';
        break;
}

