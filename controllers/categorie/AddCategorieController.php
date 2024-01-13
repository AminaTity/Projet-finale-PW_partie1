<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/CategorieDAO.php");
require("../../classes/models/CategorieModel.php");
class AddCategorieController
{
    private $categorieDAO;

    public function __construct(CategorieDAO $categorieDAO)
    {
        $this->categorieDAO = $categorieDAO;
    }

    public function addCategorie($categorie)
    {
        $this->categorieDAO->create($categorie);
        header('Location: ListCategorieController.php');
        exit();
    }
}

$categorieDAO = new CategorieDAO($pdo);
$AddCategorieController = new AddCategorieController($categorieDAO);


$categorieModel = new CategorieModel($_POST["code"], $_POST["nom"]);
echo $AddCategorieController->addCategorie($categorieModel);