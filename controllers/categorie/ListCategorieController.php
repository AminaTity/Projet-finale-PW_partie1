<?php
require("../../config/config.php");
require("../../classes/dao/CategorieDAO.php");
class ListCategorieController
{
    private $categorieDAO;

    public function __construct(CategorieDAO $categorieDAO)
    {
        $this->categorieDAO = $categorieDAO;
    }

    public function listCategorie()
    {
        $categories = $this->categorieDAO->getAll();
        include "../../views/categorie/list_categorie.php";
    }
}
$categorieDAO = new CategorieDAO($pdo);
$ListCategorieController = new ListCategorieController($categorieDAO);
echo $ListCategorieController->listCategorie();