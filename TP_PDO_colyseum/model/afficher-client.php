<?php
require_once 'database.php';


class ReadClients {
    public function readClients() {
        // Use the singleton Database class to get the connection
        $connexion = Database::connect();
        $query = 'SELECT * FROM clients';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $clients;
    }

    public function readLimitClients() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM clients LIMIT 20';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $clientsLimit = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $clientsLimit;
    }

    public function readClientsCard() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM clients WHERE card = 1';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $clientsCard = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $clientsCard;
    }

    public function readClientsName() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $clientsName = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $clientsName;
    }


}




?>