<?php
session_start();
require("../config/config.php");
require("../classes/dao/EducateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$educateur = $educateurDAO->getByEmail($_POST['email']);
if (!empty($educateur) && password_verify($_POST['password'], $educateur['password'])) {
    $roles = json_decode($educateur['roles']);
    if($roles[0] == "ROLE_ADMIN"){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: licencie/ListLicencieController.php');
        exit();
    }
}
header('Location: ../index.php');
exit();

