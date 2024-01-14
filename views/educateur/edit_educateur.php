<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un éducateur</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Modifier un éducateur</h1>

    <a class="btn btn-primary" href="ListEducateurController.php" role="button">Retour à la liste des éducateurs</a>

    <form action="../../controllers/educateur/EditEducateurController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form-group">
            <label for="licencie_id">Licencié :</label>
            <select name="licencie_id" id="licencie_id" class="form-control" required>
                <option value="<?php echo $educateur['licencie_id']; ?>" selected>--Please choose an option--</option>
                <?php
                while ($row = $licencies->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>. <?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $educateur['email']; ?>" required>
        </div>

<<<<<<< HEAD
        <div class="form-group">
            <label for="roles">Rôle :</label>
            <select name="roles" id="roles" class="form-control" multiple size="3" required>
                <option value='<?php echo $educateur['roles']; ?>' selected>--Please choose an option--</option>
                <option value='["ROLE_USER"]'>ROLE_USER</option>
                <option value='["ROLE_ADMIN"]'>ROLE_ADMIN</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" minlength="6">
        </div>
=======
        <label for="roles">Rôle :</label>
        <select name="roles" id="roles" multiple size="3" required>
            <option value='<?php echo $educateur['roles']; ?>' selected>--Please choose an option--</option>
            <option value='["ROLE_USER"]'>ROLE_USER</option>
            <option value='["ROLE_ADMIN"]'>ROLE_ADMIN</option>
        </select><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" value="<?php echo $_SESSION['password']; ?>" minlength="6" required><br>
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>