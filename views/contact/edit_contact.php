<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un contact</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Modifier un contact</h1>

    <a class="btn btn-primary" href="ListContactController.php" role="button">Retour à la liste des contacts</a>

    <form action="../../controllers/contact/EditContactController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $contact['nom']; ?>" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $contact['prenom']; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $contact['email']; ?>" required>
        </div>

        <div class="form-group">
            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="tel" class="form-control" value="<?php echo $contact['tel']; ?>" pattern="0\d{9}" required>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>