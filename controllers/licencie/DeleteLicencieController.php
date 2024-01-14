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

    public function formDeleteLicencie($licencieId)
    {
        $licencie = $this->licencieDAO->getById(($licencieId));
        if ($this->licencieDAO->estEducateur($licencieId)) {
            header('Location: ../../views/licencie/delete_licencie.php?id=' . $licencieId . '&nom=' . $licencie['nom'] . '&prenom=' . $licencie['prenom'] .'&alert=1');
            exit();
        } else {
            header('Location: ../../views/licencie/delete_licencie.php?id=' . $licencieId . '&nom=' . $licencie['nom'] . '&prenom=' . $licencie['prenom']);
            exit();
        }
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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $DeleteLicencieController->formDeleteLicencie($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $DeleteLicencieController->deleteLicencie($_GET['id']);
}
