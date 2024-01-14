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
class EditLicencieController
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

    public function editLicencie($licencieId)
    {
        $categories = $this->categorieDAO->getAll();
        $contacts = $this->contactDAO->getAll();
        $licencie = $this->licencieDAO->getById($licencieId);
        include('../../views/licencie/edit_licencie.php');
    }

    public function updateLicencie($licencieModel, $id)
    {
        $this->licencieDAO->update($licencieModel, $id);
        header('Location: ListLicencieController.php');
        exit();
    }
}
$licencieDAO = new LicencieDAO($pdo);
$categorieDAO = new CategorieDAO($pdo);
$contactDAO = new ContactDAO($pdo);
$EditLicencieController = new EditLicenciecontroller($licencieDAO, $categorieDAO, $contactDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $EditLicencieController->editLicencie($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $licencieModel = new LicencieModel($_GET['id'], $_POST["nom"], $_POST["prenom"], $_POST["contact_id"], $_POST["categorie_id"]);
    echo $EditLicencieController->updateLicencie($licencieModel, $_GET['id']);
}
