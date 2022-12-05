<?php
if (isset($_GET['uc'])){
    $uc = $_GET['uc'];
}else
{
    $uc = 'home';
}

switch($uc)
{
    case "inscription":
        include("./vendor/autoload.php");
        //include('key.php');
        include('controleurs/inscription.php');
		$estValide = Inscription();
		include('views/inscription.php');
        break;
    default:
        include 'views/homepage.php';
        break;
}

