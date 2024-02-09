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
        $this->password = password_hash($password, PASSWORD_DEFAULT); // hacher le mot de passe
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

    // Méthode pour récupérer tous les utilisateurs de la base de données et les afficher
    public function getUser() {
        // Connexion à la base de données
        $tp_formulaire_mvc = new Database();
        $connexion = $tp_formulaire_mvc->connect();

        // Requête SQL pour récupérer un utilisateur de la base de données
        $query = 'SELECT * FROM users ORDER BY id DESC';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>
