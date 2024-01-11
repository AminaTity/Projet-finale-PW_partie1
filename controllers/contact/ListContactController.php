<?php
require("../../config/config.php");
require("../../classes/dao/ContactDAO.php");
class ListContactController
{
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function listContact()
    {
        $contacts = $this->contactDAO->getAll();
        include "../../views/contact/list_contact.php";
    }
}
$contactDAO = new ContactDAO($pdo);
$ListContactController = new ListContactController($contactDAO);
echo $ListContactController->listContact();