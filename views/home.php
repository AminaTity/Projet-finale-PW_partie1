<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des licenciés</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="#home">Licenciés</a>
        <a href="controllers/categorie/ListCategorieController.php">Catégories</a>
        <a href="controllers/contact/ListContactController.php">Contact</a>
        <a href="controllers/educateur/ListEducateurController.php">Éducateurs</a>
    </div>
    <h1>Liste des licenciés</h1>
    <a href="controllers/licencie/AddLicencieController.php">Ajouter un licencié</a><br>
    <?php
    if ($row = $licencies->fetch()) {
    ?>
        <table>
            <thead>
                <tr>
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
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['contact_id']; ?></td>
                        <td><?php echo $row['categorie_id']; ?></td>
                        <td>
                            <a href="controllers/licencie/EditLicencieController.php?id=<?php echo $row['id']; ?>">Modifier</a>
                            <a href="views/licencie/delete_licencie.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['nom']; ?>&prenom=<?php echo $row['prenom']; ?>">Supprimer</a>
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