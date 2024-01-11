<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer une catégorie</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Supprimer une catégorie</h1>
    <a href="../../controllers/categorie/ListCategorieController.php">Retour à la liste des catégorie</a>


        <p>Voulez-vous vraiment supprimer cette catégorie <?php echo $_GET["code"]; ?> : <?php echo $_GET["nom"]; ?> ?</p>
        <form action="../../controllers/categorie/DeleteCategorieController.php?code=<?php echo $_GET["code"]; ?>" method="post">
            <input type="submit" value="Oui, Supprimer">
        </form>


</body>
</html>

