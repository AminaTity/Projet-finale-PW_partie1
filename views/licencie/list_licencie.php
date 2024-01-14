<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des licenciés</title>
    <link rel="stylesheet" href="../../css/styles.css">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
=======
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
</head>

<body>
    <nav>
        <ul>
            <li><a href="#" class="active">Licencié</a></li>
            <li><a href="../educateur/ListEducateurController.php">Éducateur</a></li>
            <li><a href="../categorie/ListCategorieController.php">Catégorie</a></li>
            <li><a href="../contact/ListContactController.php">Contact</a></li>
            <li style="float:right"><a href="../LogoutController.php">Déconnecter <?php echo $_SESSION['email']; ?></a></li>
        </ul>
    </nav>
    <h1>Liste des licenciés</h1>
<<<<<<< HEAD
    <a class="btn btn-primary" href="../licencie/AddLicencieController.php" role="button">Ajouter un licencié</a>
    <?php
    if ($row = $licencies->fetch()) {
    ?>
        <table class="table">
=======
    <a href="../licencie/AddLicencieController.php">Ajouter un licencié</a><br>
    <?php
    if ($row = $licencies->fetch()) {
    ?>
        <table>
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Contact</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                do {
                ?>
                    <tr class="list">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['contact_id']; ?></td>
                        <td><?php echo $row['categorie_id']; ?></td>
                        <td>
                            <a href="EditLicencieController.php?id=<?php echo $row['id']; ?>">Modifier</a>
<<<<<<< HEAD
                            <a href="DeleteLicencieController.php?id=<?php echo $row['id']; ?>">Supprimer</a>
=======
                            <a href="../../views/licencie/delete_licencie.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['nom']; ?>&prenom=<?php echo $row['prenom']; ?>">Supprimer</a>
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
                        </td>
                    </tr>
                <?php
                } while ($row = $licencies->fetch(PDO::FETCH_ASSOC))
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p>Aucun licencié trouvé.</p>
    <?php }
    ?>



</body>

</html>