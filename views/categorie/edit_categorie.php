<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier une catégorie</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Modifier une catégorie</h1>

    <a class="btn btn-primary" href="ListCategorieController.php" role="button">Retour à la liste des catégories</a>


    <form action="../../controllers/categorie/EditCategorieController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" id="code" name="code" class="form-control" value="<?php echo $categorie['code']; ?>" required>
        </div>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $categorie['nom']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>