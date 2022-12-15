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
     * charge un objet de la classe PDO à partir de son code
     * @param $style : le code du manga
     * @return un tableau de manga
     */
    public  static  function  loadMangasAnnee($annee)
    {
        $style = 1;
        $cnx = new PdoDao();
        $qry = "SELECT * "
        . "FROM manga "
        . "ORDER BY année DESC;";
        $tab = $cnx->getRows($qry, array(), 1);
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
            $description = $res[0]->description;
            $état = $res[0]->état;
            $année = $res[0]->année;
            $auteur = $res[0]->auteur;
            $dessinateur = $res[0]->dessinateur;
            $id_pays = $res[0]->id_pays;
            $lienImage = $res[0]->lien_image;
            $temp = new Manga($id_manga,$nom_manga,$prix,$description,$état,$année,$auteur,$dessinateur,$id_pays, $lienImage);
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
public static function addManga($id_manga,$nom_manga,$prix,$description,$état,$année,$auteur,$dessinateur,$id_pays,$lienImage) {
    $cnx = new PdoDao();
    $qry = "INSERT INTO manga (id_manga,nom_manga,prix,description,état,année,auteur,dessinateur,id_pays,lien_image) VALUES ('".$id_manga."','". $nom_manga."',". $prix .",'". $description ."',". $état .",". $année .",'". $auteur ."','".$dessinateur ."',". $id_pays .",'".$lienImage . "')";
    $res = $cnx->execSQL($qry, array( ));
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
     * supprime un ouvrage de la table ouvrage
     * @param $idManga : l"ID du manga
     * @return le numéro du manga supprimé si la requête à réussi
     */
    public static function delMangaGenre($idManga) {
        $cnx = new PdoDao();
        $qry = 'DELETE FROM categorie_manga WHERE id_manga = "'.$idManga.'"';
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
        $qry = 'UPDATE manga SET nom_manga="'.$unManga->getNom_manga() .'", prix='.$unManga->getPrix() .', description="'.$unManga->getDescription() .'", état='.$unManga->getEtat() .', année='.$unManga->getAnnee() .', auteur="'.$unManga->getAuteur() .'", dessinateur="'.$unManga->getDessinateur() .'", id_pays='.$unManga->getPays() .', lien_image="'.$unManga->getLien_image() .'" where id_manga = "'. $unManga->getID() .'"';
        $res = $cnx->execSQL($qry,array());
        if (is_a($res, 'PDOException')){
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }


    
    /**
     * recupère toutes les informations d'un ouvrage par rapport un son id
     * @param $id : id du manga
     * @return un tableau de genre
     */
    public static function loadMangaGenreByID($id) {
        $cnx = new PdoDao();
        // requête
        $qry = 'SELECT `nom_categ` FROM `categorie` JOIN categorie_manga on categorie_manga.id_categ = categorie.id_categ JOIN manga on categorie_manga.id_manga = manga.id_manga WHERE manga.id_manga ="'. $id  . '"';
        $res = $cnx->getRows($qry, array(), 1);
        if (is_a($res, 'PDOException')) {

            return PDO_EXCEPTION_VALUE;
        }
        if (!empty($res)) {
            return $res;
        } else {
            return NULL;
        }
    }

        /**
     * recupère toutes les informations d'un ouvrage par rapport un son id
     * @param $id : id du manga
     * @param $id : id du Genre
     * @return un tableau de genre
     */
    public static function addMangaGenre($id,$idGenre) {
        $cnx = new PdoDao();
        $qry = "INSERT INTO categorie_manga (id_manga,id_categ) VALUES ('".$id."',".$idGenre.")";
        $res = $cnx->execSQL($qry,array());
        if (is_a($res, 'PDOException')){
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }


    public static function nbVolume($id){
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $var = $objPdo->query('SELECT MAX(num_volume) FROM `volume` WHERE id_manga ="'. $id  . '"');
    while($row = $var->fetch()){
       $nbVolume = $row['MAX(num_volume)'];
    } 
    return $nbVolume;
    }
    
    public static function getStockByID($id){
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $var = $objPdo->query('SELECT stock FROM `volume` WHERE id_manga ="'. $id  . '"');
        $tab = [];
        $i = 1;
        while($row = $var->fetch()){
           $tab[$i] = $row['stock'];
           $i++;
        }
        return $tab;
        }
    
    public static function existeVolume($id, $volume){
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $var2 = $objPdo->query('SELECT * FROM `volume` WHERE id_manga ="'. $id  . '"');

            while($row = $var2->fetch())
            {
            if($volume == $row['num_volume'] ){
			return "Le volume de ce manga existe déjà !<br />";
			die();
        
            }
            }
            return null;
    }

    public static function addVolume($id, $volume, $stock){
        $cnx = new PdoDao();
        $qry = "INSERT INTO volume (id_manga,num_volume,stock) VALUES ('".$id."',".$volume.",".$stock.")";
        $res = $cnx->execSQL($qry,array());
        if (is_a($res, 'PDOException')){
            return PDO_EXCEPTION_VALUE;
        }
        return $res;


    }

    public static function setStock($id, $vol, $stock)
    {
        try {
            $objPdo = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        try{
        $req = $objPdo->prepare('UPDATE volume SET stock = :stock WHERE id_manga = :id AND num_volume = :vol');

        $req->execute(array(

       'stock' => $stock,
        'id' => $id,
       'vol' => $vol

       ));
    }catch(Exception $e){
        return('Erreur : '.$e->getMessage());
    }
    return null;
    }

    public static function delVolume($id, $vol) {
        $cnx = new PdoDao();
        $qry = 'DELETE FROM volume WHERE id_manga = "'.$id.'" AND num_volume='.$vol.'';
        //echo $qry;
        $res = $cnx->execSQL($qry,array());
        if (is_a($res,'PDOException')) {
            return PDO_EXCEPTION_VALUE;
        }
        return $res;
    }

}

