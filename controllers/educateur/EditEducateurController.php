<?php
require("../../config/config.php");
require("../../classes/dao/EducateurDAO.php");
require("../../classes/dao/LicencieDAO.php");
require("../../classes/models/EducateurModel.php");
class EditEducateurController
{
    private $educateurDAO;
    private $licencieDAO;

    public function __construct(EducateurDAO $educateurDAO, LicencieDAO $licencieDAO)
    {
        $this->educateurDAO = $educateurDAO;
        $this->licencieDAO = $licencieDAO;
    }

    public function editeducateur($educateurId)
    {
        $educateur = $this->educateurDAO->getById($educateurId);
        $licencies = $this->licencieDAO->getAll();
        include('../../views/educateur/edit_educateur.php');
    }

    public function updateEducateur($educateurModel, $id)
    {
        $this->educateurDAO->update($educateurModel, $id);
        header('Location: ListEducateurController.php');
        exit();
    }
}
$educateurDAO = new EducateurDAO($pdo);
$licencieDAO = new LicencieDAO($pdo);
$EditEducateurController = new EditEducateurController($educateurDAO, $licencieDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $EditEducateurController->editEducateur($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $educateurModel = new EducateurModel($_GET['id'], $_POST["email"], $_POST["password"], $_POST["roles"], $_POST["licencie_id"]);
    echo $EditEducateurController->updateEducateur($educateurModel, $_GET['id']);
}
