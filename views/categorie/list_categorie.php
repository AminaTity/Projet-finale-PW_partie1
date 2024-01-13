<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des catégories</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../licencie/ListLicencieController.php">Licencié</a></li>
            <li><a href="../educateur/ListEducateurController.php">Éducateur</a></li>
            <li><a href="#" class="active">Catégorie</a></li>
            <li><a href="../contact/ListContactController.php">Contact</a></li>
            <li style="float:right"><a href="../LogoutController.php">Déconnecter <?php echo $_SESSION['email']; ?></a></li>
        </ul>
    </nav>
    <h1>Liste des catégories</h1>
    <a href="../../views/categorie/add_categorie.php">Ajouter une catégorie</a><br>
    <?php
    if ($row = $categories->fetch()) {
    ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                do {
                ?>
                    <tr class="list">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td>
                            <a href="EditCategorieController.php?code=<?php echo $row['code']; ?>">Modifier</a>
                            <a href="../../views/categorie/delete_categorie.php?code=<?php echo $row['code']; ?>&nom=<?php echo $row['nom']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
                } while ($row = $categories->fetch(PDO::FETCH_ASSOC))
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p>Aucune catégorie trouvée.</p>
    <?php }
    ?>



</body>

</html>