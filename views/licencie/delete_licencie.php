<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un licencié</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Supprimer un licencié</h1>
    <a href="../../controllers/licencie/ListLicencieController.php">Retour à la liste des licenciés</a>


        <p>Voulez-vous vraiment supprimer le licencié n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["nom"]; ?> <?php echo $_GET["prenom"]; ?>?</p>
        <form action="../../controllers/licencie/DeleteLicencieController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <input type="submit" value="Oui, Supprimer">
        </form>


</body>
</html>

