<?php

class Utilisateur {
    public $email;
    public $password;

    // Définir l'email
    public function setEmail($email) {
        $this->email = $email;
    }
    // Récupérer l'email
    public function getEmail() {
        return $this->email;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }

    // Méthode pour ajouter un utilisateur à la base de données
    public function addUser() {
        // Connexion à la base de données 
        $db = new Database(); // Créer une nouvelle instance de la classe Database
        $connexion = $db->connect(); // Appeler la méthode connect de la classe Database pour se connecter à la base de données ici $connexion est un objet PDO

        // Requête SQL pour ajouter un utilisateur à la base de données
        $query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
        $stmt = $connexion->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }
}

?>
