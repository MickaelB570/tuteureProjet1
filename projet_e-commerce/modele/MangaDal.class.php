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
}

