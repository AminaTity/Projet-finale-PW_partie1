<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/EducateurDAO.php");
require("../../classes/models/EducateurModel.php");
class DeleteEducateurController
{
    private $educateurDAO;

    public function __construct(EducateurDAO $educateurDAO)
    {
        $this->educateurDAO = $educateurDAO;
    }

    public function formDeleteEducateur($educateurId)
    {
        $educateur = $this->educateurDAO->getById(($educateurId));
        if ($educateur['email'] == $_SESSION['email']) {
            header('Location: ../../views/educateur/delete_educateur.php?alert=1');
            exit();
        } else {
            header('Location: ../../views/educateur/delete_educateur.php?id=' . $educateurId . '&email=' . $educateur['email']);
            exit();
        }
    }

    public function deleteEducateur($educateurId)
    {
        $this->educateurDAO->deleteById($educateurId);
        header('Location: ListEducateurController.php');
        exit();
    }
}
$educateurDAO = new EducateurDAO($pdo);
$DeleteEducateurController = new DeleteEducateurController($educateurDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $DeleteEducateurController->formDeleteEducateur($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $DeleteEducateurController->deleteEducateur($_GET['id']);
}
