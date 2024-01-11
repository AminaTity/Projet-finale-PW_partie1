<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une catégorie</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Ajouter une catégorie</h1>
    <a href="../../controllers/categorie/ListCategorieController.php">Retour à la liste des catégories</a>

    <form action="../../controllers/categorie/AddCategorieController.php" method="post">
        <label for="code">Code :</label>
        <input type="text" id="code" name="code" required><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>

