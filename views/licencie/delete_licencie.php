<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un licencié</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Supprimer un licencié</h1>
    <a href="../../index.php">Retour à la liste des licenciés</a>


        <p>Voulez-vous vraiment supprimer ce licencié ? <?php echo $_GET["id"]; ?> : <?php echo $_GET["nom"]; ?> ?</p>
        <form action="../../controllers/licencie/DeleteLicencieController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <input type="submit" value="Oui, Supprimer">
        </form>


</body>
</html>

