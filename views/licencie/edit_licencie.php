<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un licencié</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Modifier un licencié</h1>
    
    <a class="btn btn-primary" href="ListLicencieController.php" role="button">Retour à la liste des licenciés</a>

    <form action="../../controllers/licencie/EditLicencieController.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $licencie['nom']; ?>" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $licencie['prenom']; ?>" required>
        </div>

        <div class="form-group">
            <label for="categorie_id">Catégorie :</label>
            <select name="categorie_id" id="categorie_id" class="form-control" required>
                <option value="<?php echo $licencie['categorie_id']; ?>" selected>--Please choose an option--</option>
                <?php
                while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['code']; ?> : <?php echo $row['nom']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="contact_id">Contact :</label>
            <select name="contact_id" id="contact_id" class="form-control" required>
                <option value="<?php echo $licencie['contact_id']; ?>" selected>--Please choose an option--</option>
                <?php
                while ($row = $contacts->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>. <?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>


</body>

</html>