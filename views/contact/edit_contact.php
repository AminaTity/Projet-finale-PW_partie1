<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un contact</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Modifier un contact</h1>
    <a href="ListContactController.php">Retour à la liste des contacts</a>


        <form action="../../controllers/contact/EditContactController.php?id=<?php echo $_GET['id']; ?>" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo $contact['nom']; ?>" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $contact['prenom']; ?>" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $contact['email']; ?>" required><br>

            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="tel" value="<?php echo $contact['tel']; ?>" required><br>

            <input type="submit" value="Modifier">
        </form>


</body>
</html>

