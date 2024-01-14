<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/EducateurDAO.php");
class ListEducateurController
{
    private $educateurDAO;

    public function __construct(EducateurDAO $educateurDAO)
    {
        $this->educateurDAO = $educateurDAO;
    }

    public function listEducateur()
    {
        $educateurs = $this->educateurDAO->getAll();
        include "../../views/educateur/list_educateur.php";
    }
}
$educateurDAO = new EducateurDAO($pdo);
$ListEducateurController = new ListEducateurController($educateurDAO);
echo $ListEducateurController->listEducateur();