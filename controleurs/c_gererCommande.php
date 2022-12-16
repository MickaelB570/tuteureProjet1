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
    $action = "listerCommandeUtilisateur";
}




switch($action)
{
    case 'listerCommandeUtilisateur':
    {
        if($nom_u != "") 
        {
            $lesCommandes = "";

            $lesCommandes = CommandeDal::loadCommandesByID($_SESSION['id_utilisateur']);

            include 'views/v_listerCommande.php';
        } 
    } break;
    case 'listerCommandeUtilisateurAdmin':
        {
            if($nom_u != "") 
            {
                $lesCommandes = "";

                if(isset($_GET['livre'])&&isset($_GET['id']))
                {
                    $livre = $_GET['livre'];
                    $id = $_GET['id'];

                    $res = CommandeDal::setLivree($id,$livre);
                }

                $lesCommandes = CommandeDal::loadCommandes(1);

                include 'views/v_listerCommandeAdmin.php';
            } 
        } break;
    case 'detailCommande':
        {

            if($nom_u != "") 
            {
                
                    $lesCommandes = "";
                    $idCommande = "";
                    
                    if(isset($_GET['id']) )
                    {
                        $id = $_GET['id'];

                        if($estAdministrateur == true) 
                        {
                            if(isset($_GET['idUti']))
                            {
                                $idUti = $_GET['idUti'];
                            } else
                            {
                                $idUti = $_SESSION['id_utilisateur'];
                            }
                        

                            $lesCommandes = CommandeDal::loadCommandeDetailByID($idUti,$id);
                        } else
                        {
                            $lesCommandes = CommandeDal::loadCommandeDetailByID($_SESSION['id_utilisateur'],$id);
                        }

                        include 'views/v_detailCommande.php';
                    } else 
                    {
                        $tabErreurs["Erreur"] = "Pas d'id transféré !";
                        $tabErreurs["ID"] = $ID;
                        $hasErrors = true;
                    } 
        
            } else
            {
                $tabErreurs["Erreur"] = "Vous n'ête pas connecté !";
                $tabErreurs["ID"] = $ID;
                $hasErrors = true;
            }

            if ($hasErrors) {
                $msg = "La consultation est impossible";
                 $lien = '<a href="?uc=gererPanier">retour à la saisie</a>';
                include 'views/_v_afficherErreurs.php';
            }
        } break;
    default:
    include 'views/v_listerCommande.php';
    break;
}