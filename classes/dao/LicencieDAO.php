<?php
class LicencieDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau licencié dans la base de données
    public function create(LicencieModel $licencie) {
        $sql = "insert into licencie (nom, prenom, contact_id, categorie_id) values (:nom, :prenom, :contact, :categorie)";
        $stmt = $this->pdo->prepare($sql);
        $nom = $licencie->getNom();
        $prenom = $licencie->getPrenom();
        $contact = $licencie->getContact();
        $categorie = $licencie->getCategorie();
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':categorie', $categorie);
        $stmt->execute();
    }

    // Méthode pour récupérer un licencié par son id
    public function getById($id) {
        $sql = "select * from licencie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de tous les licenciés
    public function getAll() {
        $sql = "select * from licencie";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour un licencié
    public function update(LicencieModel $licencie) {
        $sql = "update licencie set nom = :nom, prenom = :prenom, contact_id = :contact, categorie_id = :categorie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $id = $licencie->getId();
        $nom = $licencie->getNom();
        $prenom = $licencie->getPrenom();
        $contact = $licencie->getContact();
        $categorie = $licencie->getCategorie();
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':categorie', $categorie);
        $stmt->execute();
       
    }

    // Méthode pour supprimer un licencié par son ID
    public function deleteById($id) {
        $sql = "delete from licencie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>