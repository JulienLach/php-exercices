<?php
require_once 'database.php';

class ReadSpectacles {
    public function readSpectacles() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM shows ORDER BY title ASC';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $spectacles = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $spectacles;
    }
}


?>