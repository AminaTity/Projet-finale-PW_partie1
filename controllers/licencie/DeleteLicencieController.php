<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/LicencieDAO.php");
require("../../classes/models/LicencieModel.php");
class DeleteLicencieController
{
    private $licencieDAO;

    public function __construct(LicencieDAO $licencieDAO)
    {
        $this->licencieDAO = $licencieDAO;
    }

    public function deleteLicencie($licencieId)
    {
        $this->licencieDAO->deleteById($licencieId);
        header('Location: ListLicencieController.php');
        exit();
    }
}
$licencieDAO = new LicencieDAO($pdo);
$DeleteLicencieController = new DeleteLicencieController($licencieDAO);
echo $DeleteLicencieController->deleteLicencie($_GET['id']);