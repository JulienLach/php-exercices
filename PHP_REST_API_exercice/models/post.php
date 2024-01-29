<?php

class Post { // Uppercase pour les classes en PHP
    // Données de la base de données
    private $connexion;
    private $table = 'posts';

    // Propriétés des posts
    public $id;
    public $category_id;
    public $category_name; // Je n'ai pas de champ categorie name dans ma BDD mais on va utiliser JOIN dans notre requete pour combiner nos tables et pour avoir le nom des catégories
    public $title;
    public $body;
    public $author;
    public $created_at;

    // Méthode constructeur avec la base de donnée
    // Le constructeur est une méthode = c'est une fonction dans une classe
    // Le constructeur se lance automatiquement dès que j'instancie une classe (Quand je créer un objet Posts)
    public function __construct($db) { // Quand on va créer un nouvel objet Post, on passe en paramètre l'objet $db au constructeur
        $this->connexion = $db;
    }

    // Créer une méthode pour READ les posts
    public function read() {
        // Créer la requete pour récupérer les posts
        $query = 'SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at
            FROM
            ' . $this->table . ' p
            LEFT JOIN
                categories c ON p.category_id = c.id
            ORDER BY
                p.created_at DESC';
    
        // Après la requete on créer le statement avec la requete que l'on a écrite au dessus
        $statement = $this->connexion->prepare($query);

        // Executer la requete
        $statement->execute();

        return $statement;
    }


    // Créer la méthode pour GET un seul post
    public function read_single() {
        $query = 'SELECT 
        c.name as category_name,
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at
        FROM
        ' . $this->table . ' p
        LEFT JOIN
            categories c ON p.category_id = c.id
        WHERE
            p.id = ? 
        LIMIT 0,1';
            // ici le point d'interrogation p.id = ? car avec PDO on va lier une valeur d'ID
    
        // préparer le statement
        $statement = $this->connexion->prepare($query);
    
        // Relier l'ID
        $statement->bindParam(1, $this->id);

        // Executer la requete
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        // Définir les Propriétés
        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];
    }


    // Méthode pour Créer un post / CREATE post
    public function create() {
        // créer la requete SQL
        $query = 'INSERT INTO ' . $this->table . '
        SET
            title = :title,
            body = :body,
            author = :author,
            category_id = :category_id
        ';

        // Préparer le statement
        $statement = $this->connexion->prepare($query);

        // Nettoyer la donnée qui rentre
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));

        // Relier les données au statement
        $statement->bindParam(':title', $this->title);
        $statement->bindParam(':body', $this->body);
        $statement->bindParam(':author', $this->author);
        $statement->bindParam(':category_id', $this->category_id);

        // Executer la requete
        if($statement->execute()) {
            return true;
        }

        // Afficher une erreur si ça n'a pas marché
        printf("Erreur: %s.\n", $statement->error);
        
        return false;
    }


    // Méthode pour Update un post / UPDATE post
    public function update() {
        // créer la requete SQL
        $query = 'UPDATE ' . $this->table . '
        SET
            title = :title,
            body = :body,
            author = :author,
            category_id = :category_id
        WHERE 
            id = :id
        ';

        // Préparer le statement
        $statement = $this->connexion->prepare($query);

        // Nettoyer la donnée qui rentre
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Relier les données au statement
        $statement->bindParam(':title', $this->title);
        $statement->bindParam(':body', $this->body);
        $statement->bindParam(':author', $this->author);
        $statement->bindParam(':category_id', $this->category_id);
        $statement->bindParam(':id', $this->id);

        // Executer la requete
        if($statement->execute()) {
            return true;
        }

        // Afficher une erreur si ça n'a pas marché
        printf("Erreur: %s.\n", $statement->error);
        
        return false;
    }


    // Méthode DELETE post
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
?>