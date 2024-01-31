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
}