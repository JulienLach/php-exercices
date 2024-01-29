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
}







?>