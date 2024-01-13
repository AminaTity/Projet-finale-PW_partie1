<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="controllers/LoginController.php" method="post">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" minlength="6" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>