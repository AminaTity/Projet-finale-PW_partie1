<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un contact</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Ajouter un contact</h1>
    <a href="../../controllers/contact/ListContactController.php">Retour à la liste des catégories</a>

    <form action="../../controllers/contact/AddContactController.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="tel" pattern="0\d{9}" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>

