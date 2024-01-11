<?php
require("../../config/config.php");
require("../../classes/dao/ContactDAO.php");
require("../../classes/models/ContactModel.php");
class EditContactController
{
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function editContact($contactId)
    {
        $contact = $this->contactDAO->getById($contactId);
        include('../../views/contact/edit_contact.php');
    }

    public function updateContact($contactModel, $id)
    {
        $this->contactDAO->update($contactModel, $id);
        header('Location: ListContactController.php');
        exit();
    }
}
$contactDAO = new ContactDAO($pdo);
$EditContactController = new EditContactController($contactDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $EditContactController->editContact($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactModel = new ContactModel($_GET['id'], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["tel"]);
    echo $EditContactController->updateContact($contactModel, $_GET['id']);
}
