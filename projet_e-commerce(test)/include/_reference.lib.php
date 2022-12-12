<?php

class Manga
{
    private $id;
    private $nom_manga;
    private $prix;
    private $description;
    private $etat;
    private $annee;
    private $auteur;
    private $dessinateur;
    private $pays;
    private $lien_image;


    public function __construct(
        $Tid,
        $Tnom_manga,
        $Tprix,
        $Tdescription,
        $Tetat,
        $Tannee,
        $Tauteur,
        $Tdessinateur,
        $Tpays,
        $Tlien_image
    )
    {
        $this->setID($Tid);
        $this->setNom_manga($Tnom_manga);
        $this->setPrix($Tprix);
        $this->setDescription($Tdescription);
        $this->setEtat($Tetat);
        $this->setAnnee($Tannee);
        $this->setAuteur($Tauteur);
        $this->setDessinateur($Tdessinateur);
        $this->setPays($Tpays);
        $this->setLien_image($Tlien_image);
    }

	public function getID() {
		return $this->id;
	}

	public function setID($id) {
		$this->id = $id;
	}

	public function getNom_manga() {
		return $this->nom_manga;
	}

	public function setNom_manga($nom_manga) {
		$this->nom_manga = $nom_manga;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function setPrix($prix) {
		$this->prix = $prix;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getEtat() {
		return $this->etat;
	}

	public function setEtat($etat) {
		$this->etat = $etat;
	}

	public function getAuteur() {
		return $this->auteur;
	}

	public function setAuteur($auteur) {
		$this->auteur = $auteur;
	}

	public function getDessinateur() {
		return $this->dessinateur;
	}

	public function setDessinateur($dessinateur) {
		$this->dessinateur = $dessinateur;
	}

	public function getPays() {
		return $this->pays;
	}

	public function setPays($pays) {
		$this->pays = $pays;
	}

	public function getLien_image() {
		return $this->lien_image;
	}

	public function setLien_image($lien_image) {
		$this->lien_image = $lien_image;
	}

    public function getAnnee() {
		return $this->annee;
	}

	public function setAnnee($annee) {
		$this->annee = $annee;
	}

}


