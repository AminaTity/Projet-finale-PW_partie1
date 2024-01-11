<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un contact</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Supprimer un contact</h1>
    <a href="../../controllers/contact/ListContactController.php">Retour à la liste des contacts</a>


        <p>Voulez-vous vraiment supprimer ce contact ? <?php echo $_GET["id"]; ?> : <?php echo $_GET["nom"]; ?> ?</p>
        <form action="../../controllers/contact/DeleteContactController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <input type="submit" value="Oui, Supprimer">
        </form>


</body>
</html>

