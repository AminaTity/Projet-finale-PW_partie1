<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/styles.css">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    if (!empty($_GET['alert'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            Mauvais email ou mot de passe !
        </div>
    <?php
    } else if (!empty($_GET['nonAdmin'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            Vous devez être admin !
        </div>
    <?php
    }
    ?>
    <h1>Connexion</h1>
    <form action="controllers/LoginController.php" method="post">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" minlength="6" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
=======
</head>

<body>
    <h1>Connexion</h1>
    <form action="controllers/LoginController.php" method="post">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" minlength="6" required><br>

        <input type="submit" value="Se connecter">
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
    </form>
</body>

</html>