<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer un licencié</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Supprimer un licencié</h1>

    <a class="btn btn-primary" href="../../controllers/licencie/ListLicencieController.php" role="button">Retour à la liste des licenciés</a>

    <?php
    if (!empty($_GET['alert'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            Vous ne pouvez pas supprimer le licencié n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["nom"]; ?> <?php echo $_GET["prenom"]; ?>
            <br>
            Veuillez d'abord supprimer son profil éducateur.
        </div>
    <?php } else { ?>
        <p>Voulez-vous vraiment supprimer le licencié n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["nom"]; ?> <?php echo $_GET["prenom"]; ?>?</p>
        <form action="../../controllers/licencie/DeleteLicencieController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
        </form>
    <?php } ?>

</body>

</html>