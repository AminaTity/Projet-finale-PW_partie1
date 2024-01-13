<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des éducateurs</title>
    <link rel="stylesheet" href="../../css/styles.css">
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
    <a href="../educateur/AddEducateurController.php">Ajouter un éducateur</a><br>
    <?php
    if ($row = $educateurs->fetch()) {
    ?>
        <table>
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
                            <a href="../../views/educateur/delete_educateur.php?id=<?php echo $row['id']; ?>&email=<?php echo $row['email']; ?>">Supprimer</a>
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