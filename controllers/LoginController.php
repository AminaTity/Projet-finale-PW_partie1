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
<<<<<<< HEAD
        header('Location: licencie/ListLicencieController.php');
        exit();
    }
    header('Location: ../index.php?nonAdmin=1');
    exit();
}
header('Location: ../index.php?alert=1');
=======
        $_SESSION['password'] = $_POST['password'];
        header('Location: licencie/ListLicencieController.php');
        exit();
    }
}
header('Location: ../index.php');
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
exit();

