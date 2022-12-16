<?php

require_once ('PdoDao.class.php');

class CommandeDal
{
    
    /**
     * Ajoute un ouvrage dans la table commande
     * @param les attributs d'une commande
     * @return le nombre ligne affectés si la requête à réussi
     */
    public static function addCommande($id_Commande,$id_utilisateur,$prix_total) {
        $cnx = new PdoDao();
        $qry = "INSERT INTO commande VALUES ('".$id_Commande."',". $id_utilisateur.",". $prix_total .",". 0 . ")";
        $res = $cnx->execSQL($qry, array( ));
        if (is_a($res, 'PDOException')) {
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }

    /**
     * Ajoute un ouvrage dans la table panier_commande
     * @param les attributs d'une commande
     * @return le nombre ligne affectés si la requête à réussi
     */
    public static function addPanierCommande($id_Commande,$id_Manga,$num_Volume,$qte) {
        $cnx = new PdoDao();
        $qry = "INSERT INTO panier_commande VALUES ('".$id_Commande."','". $id_Manga."',". $num_Volume .",". $qte . ")";
        $res = $cnx->execSQL($qry, array( ));
        if (is_a($res, 'PDOException')) {
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }

    
    public static function loadCommandesByID($id){
        $cnx = new PdoDao();
        $style =1;
        

        // requête
        $qry = 'SELECT * from commande  WHERE id_utilisateur ='. $id  . '';
        $tab = $cnx->getRows($qry, array(), 1);

        if (is_a($tab, 'PDOException')) {

            return PDO_EXCEPTION_VALUE;
        } 
        if ($style == 1) {
            $res = array();
            foreach ($tab as $ligne) {
                $uneCommande = new Commande(
                    $ligne->id_commande, 
                    $ligne->id_utilisateur,
                    $ligne->prix_total,    
                    $ligne->estLivre,            
                );
                
                array_push($res, $uneCommande);

            }
            return $res;
        }
        return $tab;
    }


    public static function loadCommandeDetailByID($idUtil,$idCo){
        $cnx = new PdoDao();
        $style =1;
        

        // requête
        $qry = 'SELECT panier_commande.id_commande, panier_commande.id_manga,panier_commande.num_volume,panier_commande.qte,manga.nom_manga,manga.prix from panier_commande join commande on commande.id_commande = panier_commande.id_commande join manga on manga.id_manga = panier_commande.id_manga WHERE id_utilisateur ='. $idUtil  . ' and panier_commande.id_commande ="'.  $idCo .'"';
        $tab = $cnx->getRows($qry, array(), 1);

        if (is_a($tab, 'PDOException')) {

            return PDO_EXCEPTION_VALUE;
        } 
        if ($style == 1) {
            $res = array();
            foreach ($tab as $ligne) {
                $uneCommande = new Panier_commande(
                    $ligne->id_commande, 
                    $ligne->id_manga,
                    $ligne->num_volume,    
                    $ligne->qte,
                    $ligne->prix,
                    $ligne->nom_manga
                );
                
                array_push($res, $uneCommande);

            }
            return $res;
        }
        return $tab;
    }

        /**
     * charge un objet de la classe PDO à partir de son code
     * @param $style : 
     * @return un tableau de commande
     */
    public  static  function  loadCommandes($style)
    {
        $cnx = new PdoDao();
        $qry = "SELECT * "
        . "FROM commande "
        . "";
        $tab = $cnx->getRows($qry, array(), $style);
        if (is_a($tab, 'PDOexception')) {
            return PDO_EXCEPTION_VALUE;
        }
        if ($style == 1) {
            $res = array();
            foreach ($tab as $ligne) {
                $uneCommande = new Commande(
                    $ligne->id_commande, 
                    $ligne->id_utilisateur,
                    $ligne->prix_total,    
                    $ligne->estLivre,            
                );
                
                array_push($res, $uneCommande);

            }
            return $res;
        }
        return $tab;
    }


            /**
     * met à jour la livraison
     * @param $idCommande :  l'id de la commande ;  $livree : s'il est livré ou pas
     * @return le resultat s'il à réussi
     */
    public static function setLivree($idCommande,$livree)
    {
        $cnx = new PdoDao();
        $qry = 'UPDATE commande SET estLivre='.$livree .' where id_commande = "'. $idCommande.'"';
        $res = $cnx->execSQL($qry,array());
        if (is_a($res, 'PDOException')){
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }

}