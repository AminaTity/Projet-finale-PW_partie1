<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/LicencieDAO.php");
class ListLicencieController
{
    private $licencieDAO;

    public function __construct(LicencieDAO $licencieDAO)
    {
        $this->licencieDAO = $licencieDAO;
    }

    public function listLicencie()
    {
        // Récupérer la liste de tous les licenciés depuis le modèle
        $licencies = $this->licencieDAO->getAll();
        // Inclure la vue pour afficher la liste des licencié
        include "../../views/licencie/list_licencie.php";
    }
}
$licencieDAO = new LicencieDAO($pdo);
$ListLicencieController = new ListLicencieController($licencieDAO);
echo $ListLicencieController->listLicencie();
