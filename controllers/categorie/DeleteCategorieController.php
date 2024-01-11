<?php
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

    public function deleteCategorie($categorieCode)
    {
        $this->categorieDAO->deleteById($categorieCode);
        header('Location: ListCategorieController.php');
        exit();
    }
}
$categorieDAO = new CategorieDAO($pdo);
$DeleteCategorieController = new DeleteCategorieController($categorieDAO);
echo $DeleteCategorieController->deleteCategorie($_GET['code']);