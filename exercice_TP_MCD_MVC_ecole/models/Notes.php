<?php

class Notes {

public $id_note;
public $id_eleve;
public $id_matiere;
public $note;

// Méthode pour afficher les notes des élèves
public function getNotes() {
    // Se connecter  à la base de données
    $tp_mcd_ecole = new Database(); // Créer une nouvelle instance de la classe Database
    $connexion = $tp_mcd_ecole->connect(); // Appeler la méthode connect de la classe Database pour se connecter à la base de données ici $connexion est un objet PDO
    
    // Requête SQL pour récupérer toutes les notes et les élèves associés aux notes de la base de données
    // $query = 'SELECT * FROM note ORDER BY note DESC';
    $query = 'SELECT note.*, eleve.*
    FROM note
    JOIN eleve ON note.id_eleve = eleve.id_eleve;';
    $statement = $connexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

}

?>