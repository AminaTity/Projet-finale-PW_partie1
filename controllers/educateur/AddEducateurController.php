<?php
require("../../config/config.php");
require("../../classes/dao/EducateurDAO.php");
require("../../classes/dao/LicencieDAO.php");
require("../../classes/models/EducateurModel.php");
class AddEducateurController
{
    private $educateurDAO;
    private $licencieDAO;

    public function __construct(EducateurDAO $educateurDAO, LicencieDAO $licencieDAO)
    {
        $this->educateurDAO = $educateurDAO;
        $this->licencieDAO = $licencieDAO;
    }

    public function formAddEducateur()
    {
        $licencies = $this->licencieDAO->getAll();
        include('../../views/educateur/add_educateur.php');
    }

    public function addEducateur($educateur)
    {
        $this->educateurDAO->create($educateur);
        header('Location: ListEducateurController.php');
        exit();
    }
}

$educateurDAO = new EducateurDAO($pdo);
$licencieDAO = new LicencieDAO($pdo);
$AddEducateurController = new AddEducateurController($educateurDAO, $licencieDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $AddEducateurController->formAddEducateur();
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $educateurModel = new EducateurModel(null, $_POST["email"], $_POST["password"], $_POST["roles"], $_POST["licencie_id"]);
    echo $AddEducateurController->addEducateur($educateurModel);
}