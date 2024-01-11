<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un licencié</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <h1>Modifier un licencié</h1>
    <a href="../../index.php">Retour à la liste des licenciés</a>


    <form action="../../controllers/licencie/EditLicencieController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $licencie['nom']; ?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $licencie['prenom']; ?>" required><br>

        <label for="categorie_id">Catégorie :</label>
        <select name="categorie_id" id="categorie_id" required>
            <option value="<?php echo $licencie['categorie_id']; ?>" selected>--Please choose an option--</option>
            <?php
            while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['code']; ?> : <?php echo $row['nom']; ?></option>
            <?php
            }
            ?>
        </select><br>

        <label for="contact_id">Contact :</label>
        <select name="contact_id" id="contact_id" required>
            <option value="<?php echo $licencie['contact_id']; ?>" selected>--Please choose an option--</option>
            <?php
            while ($row = $contacts->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>. <?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></option>
            <?php
            }
            ?>
        </select><br>

        <input type="submit" value="Modifier">
    </form>


</body>

</html>