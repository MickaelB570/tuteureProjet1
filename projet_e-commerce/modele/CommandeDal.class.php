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
}