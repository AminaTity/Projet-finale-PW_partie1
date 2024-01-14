<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer un éducateur</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Supprimer un éducateur</h1>

    <a class="btn btn-primary" href="../../controllers/educateur/ListEducateurController.php" role="button">Retour à la liste des éducateurs</a>

<<<<<<< HEAD
    <?php
    if (!empty($_GET['alert'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            Vous ne pouvez pas vous supprimer vous même !
            <br>
            Veuillez demander à un autre admin de vous supprimer.
        </div>
    <?php } else { ?>
=======
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
        <p>Voulez-vous vraiment supprimer l'éducateur n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["email"]; ?> ?</p>
        <form action="../../controllers/educateur/DeleteEducateurController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
        </form>
    <?php } ?>

</body>

</html>