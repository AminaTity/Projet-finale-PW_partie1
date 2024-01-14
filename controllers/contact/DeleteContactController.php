<?php
session_start();
if (!$_SESSION['email']) {
    header('Location: ../../index.php');
    exit();
}
require("../../config/config.php");
require("../../classes/dao/ContactDAO.php");
require("../../classes/models/ContactModel.php");
class DeleteContactController
{
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function formDeleteContact($contactId)
    {
        $contact = $this->contactDAO->getById(($contactId));
        if ($this->contactDAO->estUtile($contactId)) {
            header('Location: ../../views/contact/delete_contact.php?id=' . $contactId . '&nom=' . $contact['nom'] . '&prenom=' . $contact['prenom'] . '&alert=1');
            exit();
        } else {
            header('Location: ../../views/contact/delete_contact.php?id=' . $contactId . '&nom=' . $contact['nom'] . '&prenom=' . $contact['prenom']);
            exit();
        }
    }

    public function deleteContact($contactId)
    {
        $this->contactDAO->deleteById($contactId);
        header('Location: ListContactController.php');
        exit();
    }
}
$contactDAO = new ContactDAO($pdo);
$DeleteContactController = new DeleteContactController($contactDAO);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $DeleteContactController->formDeleteContact($_GET['id']);
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $DeleteContactController->deleteContact($_GET['id']);
}
