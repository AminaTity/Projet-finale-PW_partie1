<?php
class HomeController
{
    private $licencieDAO;

    public function __construct(LicencieDAO $licencieDAO)
    {
        $this->licencieDAO = $licencieDAO;
    }

    public function index()
    {
        // Récupérer la liste de tous les licenciés depuis le modèle
        $licencies = $this->licencieDAO->getAll();
        // Inclure la vue pour afficher la liste des licencié
        include "views/home.php";
    }
}
?>