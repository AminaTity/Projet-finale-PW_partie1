<?php

class ContactModel
{

    private $id;

    private $nom;

    private $prenom;

    private $email;

    private $tel;



    public function __construct($id, $nom, $prenom, $email, $tel)
    {

        $this->id = $id;

        $this->nom = $nom;

        $this->prenom = $prenom;

        $this->email = $email;

        $this->tel = $tel;
    }



    public function getId()
    {

        return $this->id;
    }



    public function getNom()
    {

        return $this->nom;
    }



    public function getPrenom()
    {

        return $this->prenom;
    }



    public function getEmail()
    {

        return $this->email;
    }



    public function getTel()
    {

        return $this->tel;
    }





    public function setId($id)
    {

        $this->id = $id;
    }



    public function setNom($nom)
    {

        $this->nom = $nom;
    }



    public function setPrenom($prenom)
    {

        $this->prenom = $prenom;
    }



    public function setEmail($email)
    {

        $this->email = $email;
    }



    public function setTel($tel)
    {

        $this->tel = $tel;
    }
}
