<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/CategorieDAO.php");
require("../../classes/models/CategorieModel.php");
class DeleteCategorieController
{
    private $categorieDAO;

    public function __construct(CategorieDAO $categorieDAO)
    {
        $this->categorieDAO = $categorieDAO;
    }

    public function formDeleteCategorie($categorieId)
    {
        $categorie = $this->categorieDAO->getById(($categorieId));
        if ($this->categorieDAO->estUtile($categorieId)) {
            header('Location: ../../views/categorie/delete_categorie.php?id=' . $categorieId . '&code=' . $categorie['code'] . '&nom=' . $categorie['nom'] . '&alert=1');
            exit();
        } else {
            header('Location: ../../views/categorie/delete_categorie.php?id=' . $categorieId . '&code=' . $categorie['code'] . '&nom=' . $categorie['nom']);
            exit();
        }
    }

    public function deleteCategorie($categorieCode)
    {
        $this->categorieDAO->deleteById($categorieCode);
        header('Location: ListCategorieController.php');
        exit();
    }
}
$categorieDAO = new CategorieDAO($pdo);
$DeleteCategorieController = new DeleteCategorieController($categorieDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $DeleteCategorieController->formDeleteCategorie($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $DeleteCategorieController->deleteCategorie($_GET['id']);
}
