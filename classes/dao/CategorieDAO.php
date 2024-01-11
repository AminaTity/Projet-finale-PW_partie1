<?php
class CategorieDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer une nouvelle catégorie dans la base de données
    public function create(CategorieModel $contact) {
        $sql = "insert into categorie (code, nom) values (:code, :nom)";
        $stmt = $this->pdo->prepare($sql);
        $code = $contact->getCode();
        $nom = $contact->getNom();
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
    }

    // Méthode pour récupérer une catégorie par son ID
    public function getById($code) {
        $sql = "select * from categorie where code = :code";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de toutes les catégories
    public function getAll() {
        $sql = "select * from categorie";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour une catégorie
    public function update(CategorieModel $categorie, $currentCode) {
        $sql = "update categorie set code = :code, nom = :nom where code = :currentCode";
        $stmt = $this->pdo->prepare($sql);
        $code = $categorie->getCode();
        $nom = $categorie->getNom();
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':currentCode', $currentCode);
        $stmt->execute();
       
    }

    // Méthode pour supprimer une catégorie par son code
    public function deleteById($code) {
        $sql = "delete from categorie where code = :code";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
    }
}
?>