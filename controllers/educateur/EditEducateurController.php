<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
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
        $licencies = $this->licencieDAO->getNonEducateur();
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
<<<<<<< HEAD
    if(empty($_POST['password'])){
        $educateur = $educateurDAO->getPassword($_GET['id']);
        $password = $educateur['password'];
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
=======
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
    $educateurModel = new EducateurModel($_GET['id'], $_POST["email"], $password, $_POST["roles"], $_POST["licencie_id"]);
    echo $EditEducateurController->updateEducateur($educateurModel, $_GET['id']);
}
