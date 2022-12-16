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
    $action = "homepage";
}


switch($action)
{
    case 'homepage':
    {
        $lesMangas = MangaDal::loadMangasAnnee(date("Y"));
        include 'views/v_homepage.php';
    } break;
}