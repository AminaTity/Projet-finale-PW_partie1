<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/ContactDAO.php");
require("../../classes/models/ContactModel.php");
class AddContactController
{
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function addContact($contact)
    {
        $this->contactDAO->create($contact);
        header('Location: ListContactController.php');
        exit();
    }
}

$contactDAO = new ContactDAO($pdo);
$AddContactController = new AddContactController($contactDAO);


$contactModel = new ContactModel(null, $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["tel"]);
echo $AddContactController->addContact($contactModel);