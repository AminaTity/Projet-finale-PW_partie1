<?php
require("config/config.php");
require("classes/dao/LicencieDAO.php");
require("controllers/HomeController.php");

$licencieDAO = new LicencieDAO($pdo);

$homeController = new HomeController($licencieDAO);



echo $homeController->index();
?>