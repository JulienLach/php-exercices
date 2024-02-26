<?php
require_once 'database.php';


class ReadClients {
    public function readClients() {
        $database = new Database();
        $connexion = $database->connect();
        $query = 'SELECT * FROM clients';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $clients;
    }
}




?>