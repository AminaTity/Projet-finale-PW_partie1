<?php
// Informations de connexion à la base de données
$host = "localhost"; // L'hôte de la base de données (généralement "localhost")
$database = "club"; // Le nom de la base de données que vous avez créée
$username = "root"; // Votre nom d'utilisateur MySQL
$password = ""; // Votre mot de passe MySQL

// Connexion à la base de données en utilisant PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Définir le mode d'erreur PDO à exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>