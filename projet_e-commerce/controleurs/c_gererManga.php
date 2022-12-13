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
if(isset($_GET["search"]))
{
    $search = $_GET['search'];
}
else
{
    $search = null;
}
if($search == null);

switch($action)
{
    case("listerMangas") :
        {   
            $lesMangas = MangaDal::loadMangas(1);
            $nbMangas = count($lesMangas);
            include "views/v_recherche_avancee.php";
            
        }
        break;

    case "consulterManga": {
        $hasErrors = false;

        if (isset($_GET["id"])) {

            $ID = htmlentities($_GET["id"]);
            
            $leManga = MangaDal::loadMangaByID($ID);
            $lesGenres = MangaDal::loadMangaGenreByID($ID);
            $nbVolume = MangaDal::nbVolume($ID);
            $tabStock = MangaDal::getStockByID($ID);
            
            // connexion à la base de données
            // récupération du libellé dans la base

            // Récupération de l'ouvrage
            if ($leManga == null) {

                $tabErreurs["Erreur"] = "Ce manga n'existe pas !";
                $tabErreurs["ID"] = $ID;
                $hasErrors = true;
            }

            if ($lesGenres == null) {

                $tabErreurs["Erreur"] = "Problème avec les genres !";
                $tabErreurs["ID"] = $ID;
                $hasErrors = true;
            }

            if ($hasErrors) {
                $msg = "La consultation est impossible";
                 $lien = '<a href="?uc=gererManga">retour à la saisie</a>';
                include 'views/_v_afficherErreurs.php';
            } else {
                include "views/v_consulterManga.php";
             }
        } else {
            $msg = "La consultation est impossible";
            $lien = '<a href="?uc=gererManga">retour à la saisie</a>';
            $tabErreurs["Erreur"] = "aucun manga n'a été transmis pour consultation !";
            $hasErrors = true;
            include 'views/_v_afficherErreurs.php';
        }
    }
    break;
    case "ajouterVolume":{
        if($estAdministrateur == false) {
            $msg = "Accès non autorisé";
            include 'views/_v_afficherMessage.php';
        }else{
            // traitement de l'option : saisie ou validation ?
        if (isset($_GET["option"])) {
        $option = htmlentities($_GET["option"]);
        } else {
        $option = 'saisirVolume';
        }
        switch ($option) {
            case 'saisirVolume': {
                
                
                include 'views/v_ajouterVolume.php';
                }
            
            break;
            
            case 'validerSaisie': {
                $afficherForm = false;
                if (isset($_POST["cmdValider"])) {

                    // récupération de l'id
                    if (!empty($_GET["id"])) {
                        $id = ucfirst(htmlentities($_GET["id"]));
                        //echo $id;
                    }
                    // récupération du volume
                    if (!empty($_POST["volume"])) {
                        $volume = ucfirst(htmlentities($_POST["volume"]));
                    }
                    // récupération du stock
                    if (!empty($_POST["stock"])) {
                        $stock = htmlentities($_POST["stock"]);
                    }
                }else {

                    $msg = "Une erreur s'est produite";
                    $lien = '<a href="?uc=gererManga">retour à la saisie</a>';
                    $tabErreurs["Erreur"] = "Accès interdit";
                    $hasErrors = true;
                    include 'views/_v_afficherErreurs.php';
                }
                if(!empty($id) and !empty($volume) and !empty($stock)){

                }else{
                    if (empty($id)) {
                        $tabErreurs["id"] = "L'id doit être renseigné ! ";
                    }
                    if (empty($volume)) {
                        $tabErreurs["volume"] = "Le volume doit être renseigné ! ";
                    }
                    if (empty($stock)) {
                        $tabErreurs["stock"] = "Le stock doit être renseigné ! ";
                    }
                    $hasErrors = true;
                }
                $existe = MangaDal::existeVolume($id, $volume);
                if($existe == null){
                  $ajoute = MangaDal::addVolume($id, $volume, $stock);
                  //echo $ajoute;
                }
                else echo $existe;
            }
            break;
    }
    }
}
    break;
     case "modifierVolume": {
         if($estAdministrateur == false) {
            $msg = "Accès non autorisé";
             include 'views/_v_afficherMessage.php';
         }else{
             if (isset($_GET["option"])) {
         $option = htmlentities($_GET["option"]);
         } else {
         $option = '';
         }
        switch ($option) {
            case '':{
            include 'views/v_modifierVolume.php';
            }
            if (isset($_GET["id"]) && $_GET["id"] != null) {
                $intID = $_GET["id"];
                 echo $intID;
            }
         }
         }
     }
    break;
    case "ajouterManga": {
        $hasErrors = false;
        $id = '';
        $nom = '';
        $prix = '';
        $description = '';
        $etat = '';
        $annee = '';
        $auteur = '';
        $dessinateur = '';
        $idPays = '';
        $lienImage = '';
        $genre = '';
        $genre2 = '';
        $genre3 = '';

        if($estAdministrateur == false) {
            $msg = "Accès non autorisé";
            include 'views/_v_afficherMessage.php';
        }
        else{
                    // traitement de l'option : saisie ou validation ?
        if (isset($_GET["option"])) {
            $option = htmlentities($_GET["option"]);
        } else {
            $option = 'saisirManga';
        }
        switch ($option) {
            case 'saisirManga': {
                
                
                include 'views/v_ajouterManga.php';
                }
                break;
            case 'validerSaisie': {
                    $afficherForm = false;
                    if (isset($_POST["cmdValider"])) {

                        // récupération de l'id
                        if (!empty($_POST["id"])) {
                            $id = ucfirst(htmlentities($_POST["id"]));
                        }
                        // récupération du nom
                        if (!empty($_POST["nom"])) {
                            $nom = ucfirst(htmlentities($_POST["nom"]));
                        }
                        // récupération du prix
                        if (!empty($_POST["prix"])) {
                            $prix = htmlentities($_POST["prix"]);
                        }

                        // récupération de la desccription
                        if (!empty($_POST["description"])) {
                            $description = ucfirst(htmlentities($_POST["description"]));
                        }
                        
                        // récupération de l'état
                        if (!empty($_POST["etat"])) {
                            $etat = htmlentities($_POST["etat"]);
                        }

                         // récupération de l'annee
                        if (!empty($_POST["annee"])) {
                            $annee = htmlentities($_POST["annee"]);
                        }

                         // récupération de l'auteur
                         if (!empty($_POST["auteur"])) {
                            $auteur = ucfirst(htmlentities($_POST["auteur"]));
                        }

                         // récupération du dessinateur
                         if (!empty($_POST["dessinateur"])) {
                            $dessinateur = ucfirst(htmlentities($_POST["dessinateur"]));
                        }

                         // récupération de l'id Pays
                         if (!empty($_POST["idPays"])) {
                            $idPays = htmlentities($_POST["idPays"]);
                        }

                        // récupération du lien
                         if (!empty($_POST["lien"])) {
                            $lienImage = htmlentities($_POST["lien"]);
                        }

                        // récupération du lien
                        if (!empty($_POST["genre"])) {
                            $genre = htmlentities($_POST["genre"]);
                            echo $genre;
                        }

                        if(isset($_POST["genre1"]))
                        {
                            if (!empty($_POST["genre1"])) {
                                $genre2 = htmlentities($_POST["genre1"]);
                            }    
                        }

                        if(isset($_POST["genre2"]))
                        {
                            if (!empty($_POST["genre2"])) {
                                $genre = htmlentities($_POST["genre2"]);
                            }    
                        }


                    } else {

                        $msg = "Une erreure s'est produite";
                        $lien = '<a href="index.php?uc=gererManga">retour à la saisie</a>';
                        $tabErreurs["Erreur"] = "Accès interdit";
                        $hasErrors = true;
                        include 'views/_v_afficherErreurs.php';
                    }




                    // test zones obligatoires
                    if (!empty($id) and !empty($nom) and !empty($prix)   and !empty($description)and !empty($annee)and !empty($auteur)and !empty($dessinateur)and !empty($idPays)and !empty($lienImage) and !empty($genre)and !empty($genre2)and !empty($genre3)) {
                    } else {
                        // une ou plusieurs valeurs n'ont pas été saisies
                        if (empty($id)) {
                            $tabErreurs["id"] = "L'id doit être renseigné ! ";
                        }
                        if (empty($nom)) {
                            $tabErreurs["nom"] = "Le nom doit être renseigné ! ";
                        }
                        if (empty($prix)) {
                            $tabErreurs["prix"] = "Le prix doit être renseigné ! ";
                        }

                        if (empty($description)) {
                            $tabErreurs["description"] = "la description doit être précisé ";
                        }
                        if (empty($annee)) {
                            $tabErreurs["annee"] = "l'annee doit être précisé ";
                        }
                        if (empty($auteur)) {
                            $tabErreurs["auteur"] = "l'auteur doit être précisé ";
                        }
                        if (empty($dessinateur)) {
                            $tabErreurs["dessinateur"] = "le dessinateur doit être précisé ";
                        }
                        if (empty($idPays)) {
                            $tabErreurs["idPays"] = "l'id du pays doit être précisé ";
                        }
                        if (empty($lienImage)) {
                            $tabErreurs["lienImage"] = "le lien de l'image doit être précisé ";
                        }

                        if (empty($genre)) {
                            $tabErreurs["genre"] = "le lien de l'image doit être précisé ";
                        }

                        $hasErrors = true;
                    }
                    if (!$hasErrors) {
                        // ajout dans la base de données

                        try {
                            $res = MangaDal::addManga($id, $nom, $prix, $description,$etat,$annee, $auteur,$dessinateur,$idPays, $lienImage);
                            $res2 = MangaDal::addMangaGenre($id,$genre);

                            if ($res > 0 & $res > 0) {
                                $msg = "Le manga nommé " . $nom . " de l'auteur " . $auteur .  " a été ajouté";
                                include 'views/_v_afficherMessage.php';
                                //include 'vues/v_consulterGenre.php

                            } else {
                                $msg = "L'opération d'ajout n'a pas pu être menée à terme en raison des erreurs suivantes :";
                                include 'views/_v_afficherErreurs.php';
                            }
                        } catch (PDOException $e) {
                            $tabErreurs["Erreur"] = 'Une exception PDO a été levée !';
                            $hasErrors = true;
                        }
                    }
                    if ($hasErrors) {
                        $msg = "l'opération d'ajout n'a pas pu être menée à terme en raison des erreurs suivantes test:";
                        $lien = '<a href="index.php?uc=gererOuvrages&action=ajouterOuvrage">retour à saisie</a>';
                        include "views/_v_afficherErreurs.php";
                    }
                }
        }

        }

        break;
    }
    break;
    case "supprimerManga": {

        if($estAdministrateur == false) {
            $msg = "Accès non autorisé";
            include 'views/_v_afficherMessage.php';
        }
        else{

            if (isset($_GET["id"])) {
                $strID = strtoupper(htmlentities($_GET["id"]));
                $leManga = MangaDal::loadMangaByID($strID);
                if ($leManga == null) {
                    $tabErreurs["Erreur"] = "ce manga n'existe pas !";
                    $tabErreurs["id"] = $strID;
                    $hasErrors = true;
                }
            } else {
                $tabErreurs["Erreur"] = "Aucun manga n'a été transmis pour suppression !";
                $hasErrors = true;
            }
    
    
            if (!$hasErrors) {
                $res = MangaDal::delManga($leManga->getID());
                if ($res > 0) {
                    $msg = "le manga a été supprimé";
                    include "views/_v_afficherMessage.php";
                    $lesMangas = MangaDal::loadMangaByID(1);
                } else
                {
                    $msg = "Une erreur est survenue";
                    include "views/_v_afficherMessage.php";
                }
            }
    
            if ($hasErrors) {
                $msg = "l'opération de suppresion n'a pa pu être menée à terme en raison des erreurs suivantes :";
                $lien = '<a href="index.php?uc=gererManga">retour à la saisie</a>';
                include 'views/_v_afficherErreurs.php';
            }
        }
    }
    break;
    case "modifierManga": {
        if($estAdministrateur == false) {
            $msg = "Accès non autorisé";
            include 'views/_v_afficherMessage.php';
        }
        else{
            $strNom = "";
            $floatPrix = "";
            $strDescription = "";
            $intEtat = 0;
            $intAnnee = 0;
            $strAuteur = "";
            $strDessinateur = "";
            $intPays = 0;
            $strLien = "";
            
    
            if (isset($_GET["id"]) && $_GET["id"] != null) {
                $intID = $_GET["id"];
                // recupérer l'ouvrage avec cet identifiant
                $leManga = MangaDal::loadMangaByID($intID);
    
                if ($leManga == NULL) {
                    $tabErreurs["Erreur"] = "ce manga n'existe pas !";
    
                    $hasErrors = true;
                } else {
                    // sinon recupérer toutes les valeurs du manga
                    $strNom = $leManga->getNom_manga();
                    $floatPrix = $leManga->getPrix();
                    $strDescription = $leManga->getDescription();
                    $intEtat = $leManga->getEtat();
                    $intAnnee = $leManga->getAnnee();
                    $strAuteur = $leManga->getAuteur();
                    $strDessinateur = $leManga->getDessinateur();
                    $intPays = $leManga->getPays();
                    $strLien = $leManga->getLien_image();
                }
            } else {
                $tabErreurs["Erreur"] = "Aucun identifiant de manga n'a été transmis pour modification !";
                $hasErrors = true;
            }
            if (!$hasErrors) {
                if (isset($_GET["option"])) {
                    $option = htmlentities($_GET["option"]);
                } else {
                    $option = 'saisirManga';
                }
                switch ($option) {
                    case "saisirManga": {
                            if ($_GET["id"] != "") {
                                include "views/v_modifierManga.php";
                            }
                        }
                        break;
                    case "validerManga": {
                            if (isset($_POST["cmdValider"])) {
                                if (!empty($_POST["txtNom"])) {
                                    $strNom = ucfirst(htmlentities($_POST["txtNom"]));
                                } else {
                                    $tabErreurs["Erreur"] = "un nom de manga doit être enregistré";
                                    $tabErreurs["Titre"] = $strNom;
                                    $hasErrors = true;
                                    include 'views/_v_afficherErreurs.php';
                                }
            
                                $floatPrix = htmlentities($_POST["txtPrix"]);
                                $strDescription = ucfirst(htmlentities($_POST["txtDescription"]));
                                $intEtat = htmlentities($_POST["txtEtat"]);
                                $intAnnee = htmlentities($_POST["txtAnnee"]);
                                $strAuteur = ucfirst(htmlentities($_POST["txtAuteur"]));
                                $strDessinateur = ucfirst(htmlentities($_POST["txtDessinateur"]));
                                $intPays = htmlentities($_POST["txtPays"]);
                                $strLien = htmlentities($_POST["txtLien"]);
                                
                                if (!$hasErrors) {
                                    $leManga->setNom_manga($strNom);
                                    $leManga->setPrix($floatPrix);
                                    $leManga->setDescription($strDescription);
                                    $leManga->setEtat($intEtat);
                                    $leManga->setAnnee($intAnnee);
                                    $leManga->setAuteur($strAuteur);
                                    $leManga->setDessinateur($strDessinateur);
                                    $leManga->setPays($intPays);
                                    $leManga->setLien_image($strLien);
                                    $res = MangaDal::setManga($leManga);
                                    if ($res > 0) {
    
                                        $msg = "Le manga" . $leManga->getID() . "-" . $leManga->getNom_manga() . " a été modifié";
    
                                        include "views/_v_afficherMessage.php";
                                    } else {
                                        $tabErreurs["Erreur"] = "une erreur s'est produite lors de l'opération de mis à jour";
                                        $tabErreurs["ID"] = $intID;
                                        $tabErreurs["Titre"] = $strNom;
                                        $tabErreurs["SQL"] = $res;
                                        $msg = "";
                                        $lien = "";
                                        $hasErrors = true;
                                        include 'views/_v_afficherErreurs.php';
                                    }
                                }
                            } else {
                                $msg = "Une erreur s'est produite";
                                $lien = '<a href="index.php?uc=gererManga">retour à la saisie</a>';
                                $tabErreurs["Erreur"] = "Accès interdit";
                                $hasErrors = true;
                                include 'views/_v_afficherErreurs.php';
                            }
                        }
                        break;
                }
            } else {
                $msg = "L'opération de modification n'a pas pu être menée à terme en raison des erreurs suivantes :";
                $lien = '<a href="index.php?uc=gererManga&action=modifierManga">Retour à la saisie</a>';
                include 'views/_v_afficherErreurs.php';
            }

        }
       
    }
    break;
    default:
    include 'views/v_recherche_avancee.php';
    break;
}
