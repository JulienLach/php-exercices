<?php require_once 'database.php';


class ReadPatients {

    public function readPatients() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM patients';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $patients = $statement->fetchAll();
        
        return $patients;
    }
}