<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer une catégorie</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Supprimer une catégorie</h1>

    <a class="btn btn-primary" href="../../controllers/categorie/ListCategorieController.php" role="button">Retour à la liste des catégorie</a>

    <?php
    if (!empty($_GET['alert'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            Vous ne pouvez pas supprimer la catégorie n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["code"]; ?> - <?php echo $_GET["nom"]; ?>
            <br>
            Cette catégorie ne doit contenir aucun licencié pour être supprimée.
        </div>
    <?php } else { ?>
        <p>Voulez-vous vraiment supprimer la catégorie n°<?php echo $_GET["id"]; ?> : <?php echo $_GET["code"]; ?> - <?php echo $_GET["nom"]; ?></p>
        <form action="../../controllers/categorie/DeleteCategorieController.php?id=<?php echo $_GET["id"]; ?>" method="post">
            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
        </form>
    <?php } ?>

</body>

</html>