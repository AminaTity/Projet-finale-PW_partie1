<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/LicencieDAO.php");
require("../../classes/dao/CategorieDAO.php");
require("../../classes/dao/ContactDAO.php");
require("../../classes/models/LicencieModel.php");
class AddLicencieController
{
    private $licencieDAO;
    private $categorieDAO;
    private $contactDAO;

    public function __construct(LicencieDAO $licencieDAO, CategorieDAO $categorieDAO, ContactDAO $contactDAO)
    {
        $this->licencieDAO = $licencieDAO;
        $this->categorieDAO = $categorieDAO;
        $this->contactDAO = $contactDAO;
    }

    public function formAddLicencie()
    {
        $categories = $this->categorieDAO->getAll();
        $contacts = $this->contactDAO->getAll();
        include('../../views/licencie/add_licencie.php');
    }

    public function addLicencie($licencie)
    {
        $this->licencieDAO->create($licencie);
        header('Location: ListLicencieController.php');
        exit();
    }
}

$licencieDAO = new LicencieDAO($pdo);
$categorieDAO = new CategorieDAO($pdo);
$contactDAO = new ContactDAO($pdo);
$AddLicencieController = new AddLicencieController($licencieDAO, $categorieDAO, $contactDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $AddLicencieController->formAddLicencie();
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $licencieModel = new LicencieModel(null, $_POST["nom"], $_POST["prenom"], $_POST["contact_id"], $_POST["categorie_id"]);
    echo $AddLicencieController->addLicencie($licencieModel);
}