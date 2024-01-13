<?php
class EducateurDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau éducateur dans la base de données
    public function create(EducateurModel $educateur) {
        $sql = "insert into educateur (licencie_id, email, roles, password) values (:licencie_id, :email, :roles, :password)";
        $stmt = $this->pdo->prepare($sql);
        $licencie_id = $educateur->getLicencie();
        $email = $educateur->getEmail();
        $roles = $educateur->getRoles();
        $password = $educateur->getPassword();
        $stmt->bindParam(':licencie_id', $licencie_id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':roles', $roles);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

    // Méthode pour récupérer un éducateur par son ID
    public function getById($id) {
        $sql = "select * from educateur where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer la liste de tous les éducateurs
    public function getAll() {
        $sql = "select * from educateur";
        return $this->pdo->query($sql);
    }

    // Méthode pour mettre à jour un éducateur
    public function update(EducateurModel $educateur) {
        $sql = "update educateur set email = :email, roles = :roles, password = :password where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $id = $educateur->getId();
        $email = $educateur->getEmail();
        $roles = $educateur->getRoles();
        $password = $educateur->getPassword();
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':roles', $roles);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
       
    }

    // Méthode pour supprimer un éducateur par son ID
    public function deleteById($id) {
        $sql = "delete from educateur where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Méthode pour récupérer l'éducateur à partir de l'email
    public function getByEmail($email) {
        $sql = "select * from educateur where email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>