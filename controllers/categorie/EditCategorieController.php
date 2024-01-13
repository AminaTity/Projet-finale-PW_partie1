<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/CategorieDAO.php");
require("../../classes/models/CategorieModel.php");
class EditCategorieController
{
    private $categorieDAO;

    public function __construct(CategorieDAO $categorieDAO)
    {
        $this->categorieDAO = $categorieDAO;
    }

    public function editCategorie($categorieId)
    {
        $categorie = $this->categorieDAO->getById($categorieId);
        include('../../views/categorie/edit_categorie.php');
    }

    public function updateCategorie($categorieModel, $code)
    {
        $this->categorieDAO->update($categorieModel, $code);
        header('Location: ListCategorieController.php');
        exit();
    }
}
$categorieDAO = new CategorieDAO($pdo);
$EditCategorieController = new EditCategorieController($categorieDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $EditCategorieController->editCategorie($_GET['code']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categorieModel = new CategorieModel($_POST["code"], $_POST["nom"]);
    echo $EditCategorieController->updateCategorie($categorieModel, $_GET['code']);
}
