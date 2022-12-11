<?php
require_once ('PdoDao.class.php');




class MangaDal
{

    /**
     * charge un objet de la classe PDO à partir de son code
     * @param $style : le code du manga
     * @return un tableau de manga
     */
    public  static  function  loadMangas($style)
    {
        $cnx = new PdoDao();
        $qry = "SELECT * "
        . "FROM manga "
        . "ORDER BY nom_manga;";
        $tab = $cnx->getRows($qry, array(), $style);
        if (is_a($tab, 'PDOexception')) {
            return PDO_EXCEPTION_VALUE;
        }
        if ($style == 1) {
            $res = array();
            foreach ($tab as $ligne) {
                $unManga = new Manga(
                    $ligne->id_manga, 
                    $ligne->nom_manga,
                    $ligne->prix,    
                    $ligne->stock, 
                    $ligne->description,
                    $ligne->état,
                    $ligne->année,
                    $ligne->auteur,
                    $ligne->dessinateur,
                    $ligne->id_pays,
                    $ligne->lien_image
                   
                );
                
                array_push($res, $unManga);

            }
            return $res;
        }
        return $tab;
    }

    /**
     * recupère toutes les informations d'un ouvrage par rapport un son id
     * @param $id : id du manga
     * @return un objet manga
     */
    public static function loadMangaByID($id) {
        $cnx = new PdoDao();
        // requête
        $qry = 'SELECT * from manga WHERE id_manga ="'. $id  . '"';
        $res = $cnx->getRows($qry, array(), 1);


        if (is_a($res, 'PDOException')) {

            return PDO_EXCEPTION_VALUE;
        }
        if (!empty($res)) {
            // le genre existe
            $id_manga = $res[0]->id_manga;
            $nom_manga = $res[0]->nom_manga;
            $prix = $res[0]->prix;
            $stock = $res[0]->stock;
            $description = $res[0]->description;
            $état = $res[0]->état;
            $année = $res[0]->année;
            $auteur = $res[0]->auteur;
            $dessinateur = $res[0]->dessinateur;
            $id_pays = $res[0]->id_pays;
            $lienImage = $res[0]->lien_image;
            $temp = new Manga($id_manga,$nom_manga,$prix,$stock,$description,$état,$année,$auteur,$dessinateur,$id_pays, $lienImage);
            return $temp;
        } else {
            return NULL;
        }
    }


/**
 * Ajoute un ouvrage dans la table ouvrage
 * @param les attributs d'un manga
 * @return le nombre ligne affectés si la requête à réussi
 */
public static function addManga($id_manga,$nom_manga,$prix,$stock,$description,$état,$année,$auteur,$dessinateur,$id_pays,$lienImage) {
    $cnx = new PdoDao();
    $qry = 'INSERT INTO manga (id_manga,nom_manga,prix,stock,description,état,année,auteur,dessinateur,id_pays,lien_image) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
    $res = $cnx->execSQL($qry, array(// nb de lignes affectées
            
            $id_manga,
            $nom_manga,
            $prix,
            $stock,
            $description,
            $état,
            $année,
            $auteur,
            $dessinateur,
            $id_pays,
            $lienImage
        )
    );
    if (is_a($res, 'PDOException')) {
        return PDO_EXCEPTION_VALUE;
    }
    return $res;
}


    /**
     * supprime un ouvrage de la table ouvrage
     * @param $idManga : l"ID du manga
     * @return le numéro du manga supprimé si la requête à réussi
     */
    public static function delManga($idManga) {
        $cnx = new PdoDao();
        $qry = 'DELETE FROM manga WHERE id_manga = "'.$idManga.'"';
        $res = $cnx->execSQL($qry,array());
        if (is_a($res,'PDOException')) {
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }


        /**
     * met à jour un ouvrage
     * @param $unManga : recupère un manga
     * @return le resultat s'il à réussi
     */
    public static function setManga($unManga)
    {
        $cnx = new PdoDao();
        $qry = 'UPDATE manga SET nom_manga="'.$unManga->getNom_manga() .'", prix='.$unManga->getPrix() .', stock='.$unManga->getStock() .', description="'.$unManga->getDescription() .'", état='.$unManga->getEtat() .', année='.$unManga->getAnnee() .', auteur="'.$unManga->getAuteur() .'", dessinateur="'.$unManga->getDessinateur() .'", id_pays='.$unManga->getPays() .', lien_image="'.$unManga->getLien_image() .'" where id_manga = "'. $unManga->getID() .'"';
        $res = $cnx->execSQL($qry,array());
        if (is_a($res, 'PDOException')){
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }

}

