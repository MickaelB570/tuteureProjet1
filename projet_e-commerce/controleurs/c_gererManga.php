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
    $action = "listerMangas";
}

switch($action)
{
    case($action) :
        {
            $lesMangas = MangaDal::loadMangas(1);
            $nbMangas = count($lesMangas);
            include "views/recherche_avancee.php";
        }
        default:
        include 'views/recherche_avancee.php';
        break;
}