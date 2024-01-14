<?php

class EducateurModel
{

    private $id;

    private $email;

    private $password;

    private $roles;

    private $licencie;



    public function __construct($id, $email, $password, $roles, $licencie)
    {

        $this->id = $id;

        $this->email = $email;

        $this->password = $password;

        $this->roles = $roles;

        $this->licencie = $licencie;
    }



    public function getId()
    {

        return $this->id;
    }



    public function getEmail()
    {

        return $this->email;
    }



    public function getPassword()
    {

        return $this->password;
    }



    public function getRoles()
    {

        return $this->roles;
    }



    public function getLicencie()
    {

        return $this->licencie;
    }





    public function setId($id)
    {

        $this->id = $id;
    }



    public function setEmail($email)
    {

        $this->email = $email;
    }



    public function setPassword($password)
    {

        $this->password = $password;
    }



    public function setRoles($roles)
    {

        $this->roles = $roles;
    }



    public function setLicencie($licencie)
    {

        $this->licencie = $licencie;
    }
}
