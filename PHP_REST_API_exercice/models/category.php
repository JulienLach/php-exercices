<?php

class Category {
    // variables et données de la base de données
    private $connexion;
    private $table = 'categories';

    // Propriétés des categories
    public $id;
    public $name;
    public $created_at;

    // Méthode constructeur avec la base de donnée
    // Le constructeur est une méthode = c'est une fonction dans une classe
    // Le constructeur se lance automatiquement dès que j'instancie une classe (Quand je créer un objet Posts)
    public function __construct($db) { // Quand on va créer un nouvel objet Post, on passe en paramètre l'objet $db au constructeur
        $this->connexion = $db;
    }

    // Créer une méthode pour READ les categories
        public function read() {
        // Créer la requete
        $query = 'SELECT
            id,
            name,
            created_at
            FROM
            '. $this->table. '
            ORDER BY
            created_at DESC';
        // Après la requete on créer le statement avec la requete que l'on a écrite au dessus
        $statement = $this->connexion->prepare($query);
        // Executer la requete
        $statement->execute();
        return $statement;
    }


    // Créer une méthode pour CREATE les categories
    public function create() {
        // Créer la requete SQL
        $query = 'INSERT INTO ' . $this->table . '
        SET
            name = :name';

        // Préparer le statement
        $statement = $this->connexion->prepare($query);

        // Nettoyer la donnée qui rentre
        $this->name = htmlspecialchars(strip_tags($this->name));

        // Relier les données au statement
        $statement->bindParam(':name', $this->name);

        // Executer la requete
        if($statement->execute()) {
            return true;
        }

        // Afficher une erreur si ça n'a pas marché
        printf("Erreur: %s.\n", $statement->error);
        
        return false;
    }

    // Méthode pour UPDATE une catégorie / UPDATE Categorie
    public function update() {
        // créer la requete SQL
        $query = 'UPDATE ' . $this->table . '
        SET
            name = :name
        WHERE 
            id = :id
        ';

        // Préparer le statement
        $statement = $this->connexion->prepare($query);

        // Nettoyer la donnée qui rentre
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->id = htmlspecialchars(strip_tags($this->id)); // ici j'ai besoin de passer mon ID dans mon raw body du postman pour identifier la catégorie à UPDATE

        // Relier les données au statement
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':id', $this->id);

        // Executer la requete
        if($statement->execute()) {
            return true;
        }

        // Afficher une erreur si ça n'a pas marché
        printf("Erreur: %s.\n", $statement->error);
        
        return false;
    }

    // Méthode DELETE d'une catégorie
    public function delete() {
        // Créer la requette
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id'
        ;

        // Préparer le statement
        $statement = $this->connexion->prepare($query);

        // Netotyer la donnée
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Relier l'ID au statement
        $statement->bindParam(':id', $this->id);
        
        // Executer la requete
        if($statement->execute()) {
            return true;
        }

        // Afficher une erreur si ça n'a pas marché
        printf("Erreur: %s.\n", $statement->error);
        
        return false;
}








}