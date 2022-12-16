<?php


function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']['id'] = array();
       $_SESSION['panier']['nomManga'] = array();
       $_SESSION['panier']['idManga'] = array();
       $_SESSION['panier']['idVolume'] = array();
       $_SESSION['panier']['qte'] = array();
       $_SESSION['panier']['prix'] = array();
       $_SESSION['panier']['verrou'] = false;
    }
    return true;
 }


 function ajouterArticle($nomManga,$idManga,$idVolume, $qte, $prix){
    $id = $idManga . $idVolume;


    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($id,  $_SESSION['panier']['id']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['qte'][$positionProduit] += $qte ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['id'],$id);
          array_push( $_SESSION['panier']['nomManga'],$nomManga);
          array_push( $_SESSION['panier']['idManga'],$idManga);
          array_push( $_SESSION['panier']['idVolume'],$idVolume);
          array_push( $_SESSION['panier']['qte'],$qte);
          array_push( $_SESSION['panier']['prix'],$prix);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }


 

 function supprimerUnVolume($num){

    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       if (isset($_SESSION['panier']['id'][$num]))
       {
          $_SESSION['panier']['qte'][$num] -= 1 ;
          if($_SESSION['panier']['qte'][$num] == 0)
          {
            supprimereDuPanier($num);
          }
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }


 function supprimereDuPanier($num)
 {
    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
        //Si le produit existe déjà on ajoute seulement la quantité
        if (isset($_SESSION['panier']['id'][$num]))
        {
            
            if($num > 0){
                unset($_SESSION['panier']['id'][$num]);
                $_SESSION['panier']['id'] = array_filter($_SESSION['panier']['id']);
    
                unset($_SESSION['panier']['nomManga'][$num]);
                $_SESSION['panier']['nomManga'] = array_filter($_SESSION['panier']['nomManga']);
    
                unset($_SESSION['panier']['idManga'][$num]);
                $_SESSION['panier']['idManga'] = array_filter($_SESSION['panier']['idManga']);
    
                unset($_SESSION['panier']['idVolume'][$num]);
                $_SESSION['panier']['idVolume']  = array_filter($_SESSION['panier']['idVolume']);
    
                unset($_SESSION['panier']['qte'][$num]);
                $_SESSION['panier']['qte'] = array_filter($_SESSION['panier']['qte']);
    
                unset($_SESSION['panier']['prix'][$num]);
                $_SESSION['panier']['prix'] = array_filter($_SESSION['panier']['prix']);
                }
                else{

                //unset($_SESSION['panier']['id'][$num]);
                $test = array_shift(($_SESSION['panier']['id']));
    
                //unset($_SESSION['panier']['nomManga'][$num]);
                $test2 = array_shift($_SESSION['panier']['nomManga']);
    
                //unset($_SESSION['panier']['idManga'][$num]);
                $test3 = array_shift($_SESSION['panier']['idManga']);
    
                //unset($_SESSION['panier']['idVolume'][$num]);
                $test4 = array_shift($_SESSION['panier']['idVolume']);
    
                //unset($_SESSION['panier']['qte'][$num]);
                $test5 = array_shift($_SESSION['panier']['qte']);
    
                //unset($_SESSION['panier']['prix'][$num]);
                $test6 = array_shift($_SESSION['panier']['prix']);
                }
        }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }


 function supprimerPanier(){
   unset($_SESSION['panier']['id']);
   unset($_SESSION['panier']['nomManga']);
   unset($_SESSION['panier']['idManga']);
   unset($_SESSION['panier']['idVolume']);
   unset($_SESSION['panier']['qte']);
   unset($_SESSION['panier']['prix']);
   unset($_SESSION['panier']);
   creationPanier();
 }



 /**
 * Permet de savoir si le panier est verrouillé
 * @return booleen
 */
function isVerrouille(){
    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
    return true;
    else
    return false;
 }
 