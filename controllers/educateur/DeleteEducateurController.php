<?php
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

    public function deleteEducateur($educateurId)
    {
        $this->educateurDAO->deleteById($educateurId);
        header('Location: ListEducateurController.php');
        exit();
    }
}
$educateurDAO = new EducateurDAO($pdo);
$DeleteEducateurController = new DeleteEducateurController($educateurDAO);
echo $DeleteEducateurController->deleteEducateur($_GET['id']);