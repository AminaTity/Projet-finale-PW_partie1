<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des contacts</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../licencie/ListLicencieController.php">Licencié</a></li>
            <li><a href="../educateur/ListEducateurController.php">Éducateur</a></li>
            <li><a href="../categorie/ListCategorieController.php">Catégorie</a></li>
            <li><a href="#" class="active">Contact</a></li>
            <li style="float:right"><a href="../LogoutController.php">Déconnecter <?php echo $_SESSION['email']; ?></a></li>
        </ul>
    </nav>
    <h1>Liste des contacts</h1>
    <a href="../../views/contact/add_contact.php">Ajouter un contact</a><br>
    <?php
    if ($row = $contacts->fetch()) {
    ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
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
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tel']; ?></td>
                        <td>
                            <a href="EditContactController.php?id=<?php echo $row['id']; ?>">Modifier</a>
                            <a href="../../views/contact/delete_contact.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['nom']; ?>&prenom=<?php echo $row['prenom']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
                } while ($row = $contacts->fetch(PDO::FETCH_ASSOC))
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