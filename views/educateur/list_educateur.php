<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des éducateurs</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../licencie/ListLicencieController.php">Licencié</a></li>
            <li><a href="#" class="active">Éducateur</a></li>
            <li><a href="../categorie/ListCategorieController.php">Catégorie</a></li>
            <li><a href="../contact/ListContactController.php">Contact</a></li>
            <li style="float:right"><a href="../LogoutController.php">Déconnecter <?php echo $_SESSION['email']; ?></a></li>
        </ul>
    </nav>
    <h1>Liste des éducateurs</h1>
    <a class="btn btn-primary" href="../educateur/AddEducateurController.php" role="button">Ajouter un éducateur</a>
    <?php
    if ($row = $educateurs->fetch()) {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Licencié</th>
                    <th>Email</th>
                    <th>Rôles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                do {
                ?>
                    <tr class="list">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['licencie_id']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['roles']; ?></td>
                        <td>
                            <a href="EditEducateurController.php?id=<?php echo $row['id']; ?>">Modifier</a>
<<<<<<< HEAD
                            <a href="DeleteEducateurController.php?id=<?php echo $row['id']; ?>">Supprimer</a>
=======
                            <a href="../../views/educateur/delete_educateur.php?id=<?php echo $row['id']; ?>&email=<?php echo $row['email']; ?>">Supprimer</a>
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
                        </td>
                    </tr>
                <?php
                } while ($row = $educateurs->fetch(PDO::FETCH_ASSOC))
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p>Aucun éducateur trouvé.</p>
    <?php }
    ?>



</body>

</html>