<?php
class ContactDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau contact dans la base de données
    public function create(ContactModel $contact) {
        $sql = "insert into contact (nom, prenom, email, tel) values (:nom, :prenom, :email, :tel)";
        $stmt = $this->pdo->prepare($sql);
        $nom = $contact->getNom();
        $prenom = $contact->getPrenom();
        $email = $contact->getEmail();
        $tel = $contact->getTel();
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->execute();
    }

    // Méthode pour récupérer un contact par son ID
    public function getById($id) {
        $sql = "select * from contact where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de tous les contacts
    public function getAll() {
        $sql = "select * from contact";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour un contact
    public function update(ContactModel $contact) {
        $sql = "update contact set nom = :nom, prenom = :prenom, email = :email, tel = :tel where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $id = $contact->getId();
        $nom = $contact->getNom();
        $prenom = $contact->getPrenom();
        $email = $contact->getEmail();
        $tel = $contact->getTel();
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->execute();
       
    }

    // Méthode pour supprimer un contact par son ID
    public function deleteById($id) {
        $sql = "delete from contact where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>