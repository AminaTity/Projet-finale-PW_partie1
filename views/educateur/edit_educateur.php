<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un éducateur</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <h1>Modifier un éducateur</h1>
    <a href="ListEducateurController.php">Retour à la liste des éducateurs</a>


    <form action="../../controllers/educateur/EditEducateurController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label for="licencie_id">Licencié :</label>
        <select name="licencie_id" id="licencie_id" required>
            <option value="<?php echo $educateur['licencie_id']; ?>" selected>--Please choose an option--</option>
            <?php
            while ($row = $licencies->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>. <?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></option>
            <?php
            }
            ?>
        </select><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $educateur['email']; ?>" required><br>

        <label for="roles">Rôle :</label>
        <select name="roles" id="roles" multiple size="3" required>
            <option value='<?php echo $educateur['roles']; ?>' selected>--Please choose an option--</option>
            <option value='{"0" : "ROLE_USER"}'>ROLE_USER</option>
            <option value='{"1" : "ROLE_ADMIN"}'>ROLE_ADMIN</option>
        </select><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" value="<?php echo $educateur['password']; ?>" required><br>

        <input type="submit" value="Modifier">
    </form>


</body>

</html>