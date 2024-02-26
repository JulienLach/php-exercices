<?php require_once 'database.php';


class ReadPatientById {

    public function readPatientById() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM patients WHERE id = :id';
        $statement = $connexion->prepare($query);
        $statement->bindValue(':id', $_GET['id']);
        $statement->execute();
        $patient = $statement->fetch();
        
        return $patient;
    }
}