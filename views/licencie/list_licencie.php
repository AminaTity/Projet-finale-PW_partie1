<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des licenciés</title>
    <link rel="stylesheet" href="../../css/styles.css">
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
    <a href="../licencie/AddLicencieController.php">Ajouter un licencié</a><br>
    <?php
    if ($row = $licencies->fetch()) {
    ?>
        <table>
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
                            <a href="../../views/licencie/delete_licencie.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['nom']; ?>&prenom=<?php echo $row['prenom']; ?>">Supprimer</a>
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