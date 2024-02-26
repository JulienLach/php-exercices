<?php
require_once 'database.php';

class ReadSpectaclesTypes {
    public function readSpectaclesTypes() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM showTypes';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $spectaclesTypes = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $spectaclesTypes;
    }
}