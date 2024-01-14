<?php
class CategorieDAO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer une nouvelle catégorie dans la base de données
    public function create(CategorieModel $contact)
    {
        $sql = "insert into categorie (code, nom) values (:code, :nom)";
        $stmt = $this->pdo->prepare($sql);
        $code = $contact->getCode();
        $nom = $contact->getNom();
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
    }

    // Méthode pour récupérer une catégorie par son ID
    public function getById($id)
    {
        $sql = "select * from categorie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de toutes les catégories
    public function getAll()
    {
        $sql = "select * from categorie";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour une catégorie
    public function update(CategorieModel $categorie)
    {
        $sql = "update categorie set code = :code, nom = :nom where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $id = $categorie->getId();
        $code = $categorie->getCode();
        $nom = $categorie->getNom();
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
    }

    // Méthode pour supprimer une catégorie par son id
    public function deleteById($id)
    {
        $sql = "delete from categorie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Méthode pour vérifier si au moins un licencié est dans cette catégorie
    public function estUtile($id)
    {
        $sql = "select * from licencie where categorie_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
