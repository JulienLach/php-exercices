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
        $tp_formulaire_mvc = new Database(); // Créer une nouvelle instance de la classe Database
        $connexion = $tp_formulaire_mvc->connect(); // Appeler la méthode connect de la classe Database pour se connecter à la base de données ici $connexion est un objet PDO

        // Requête SQL pour ajouter un utilisateur à la base de données
        $query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':password', $this->password);
        $statement->execute();
    }
}

?>
