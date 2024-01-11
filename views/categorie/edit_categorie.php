<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une catégorie</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Modifier une catégorie</h1>
    <a href="ListCategorieController.php">Retour à la liste des catégories</a>


        <form action="../../controllers/categorie/EditCategorieController.php?code=<?php echo $_GET['code']; ?>" method="post">
            <label for="code">Code :</label>
            <input type="text" id="code" name="code" value="<?php echo $categorie['code']; ?>" required><br>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo $categorie['nom']; ?>" required><br>

            <input type="submit" value="Modifier">
        </form>


</body>
</html>

