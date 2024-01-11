<?php

class CategorieModel {

    private $code;

    private $nom;



    public function __construct($code, $nom) {

        $this->code = $code;

        $this->nom = $nom;
    }



    public function getCode() {

        return $this->code;

    }



    public function getNom() {

        return $this->nom;

    }



    public function setCode($code) {

        $this->code=$code;

    }



    public function setNom($nom) {

        $this->nom=$nom;

    }
}

?>

