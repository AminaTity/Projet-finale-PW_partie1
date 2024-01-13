<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un éducateur</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Supprimer un éducateur</h1>
    <a href="../../controllers/educateur/ListEducateurController.php">Retour à la liste des éducateur</a>


        <p>Voulez-vous vraiment supprimer l'éducateur n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["email"]; ?> ?</p>
        <form action="../../controllers/educateur/DeleteEducateurController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <input type="submit" value="Oui, Supprimer">
        </form>


</body>
</html>

