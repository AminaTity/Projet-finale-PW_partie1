<?php
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

    public function deleteContact($contactId)
    {
        $this->contactDAO->deleteById($contactId);
        header('Location: ListContactController.php');
        exit();
    }
}
$contactDAO = new ContactDAO($pdo);
$DeleteContactController = new DeleteContactController($contactDAO);
echo $DeleteContactController->deleteContact($_GET['id']);