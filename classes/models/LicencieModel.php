<?php

class LicencieModel {

    private $id;

    private $nom;

    private $prenom;

    private $contact;

    private $categorie;



    public function __construct($id ,$nom, $prenom, $contact, $categorie) {

        $this->id = $id;

        $this->nom = $nom;

        $this->prenom = $prenom;

        $this->contact = $contact;

        $this->categorie = $categorie;

    }



    public function getId() {

        return $this->id;

    }



    public function getNom() {

        return $this->nom;

    }



    public function getPrenom() {

        return $this->prenom;

    }



    public function getContact() {

        return $this->contact;

    }



    public function getCategorie() {

        return $this->categorie;

    }

    

    

    public function setId($id) {

        $this->id=$id;

    }



    public function setNom($nom) {

        $this->nom=$nom;

    }



    public function setPrenom($prenom) {

        $this->prenom=$prenom;

    }



    public function setContact($contact) {

        $this->contact=$contact;

    }



    public function setCategorie($categorie) {

        $this->categorie=$categorie;

    }

}

?>

