<?php
class LicencieDAO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau licencié dans la base de données
    public function create(LicencieModel $licencie)
    {
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
    public function getById($id)
    {
        $sql = "select * from licencie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de tous les licenciés
    public function getAll()
    {
        $sql = "select * from licencie";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour un licencié
    public function update(LicencieModel $licencie)
    {
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
    public function deleteById($id)
    {
        $sql = "delete from licencie where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Méthode pour séléctionner un licencié qui n'est pas éducateur
<<<<<<< HEAD
    public function getNonEducateur()
    {
        $sql = "select * from licencie where id not in (select licencie_id from educateur)";
        return $this->pdo->query($sql);
    }

    // Méthode pour vérifier si un licencié est éducateur
    public function estEducateur($id)
    {
        $sql = "select * from educateur where licencie_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
=======
    public function getNonEducateur() {
        $sql = "select * from licencie where id not in (select licencie_id from educateur)";
        return $this->pdo->query($sql);
    }
>>>>>>> 5a30b199fc4f54f34cc13fc4c41a0d92b91d52cf
}
