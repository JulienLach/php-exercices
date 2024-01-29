<?php 

class Database {
    // Paramètres de la BDD pour se connecter
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'julien';
    private $password = 'mysqlpassword';
    private $connexion;

    // Créer la méthode pour se connecter
    public function connect() {
        $this->connexion = null; //this pour toujours faire référence à l'objet en cours
        
        try {
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); // l'objet PDO prend en paramètre le DSN, qui est le type de database, le host , tout  ce qu'il faut pour se connecter
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mettre en place le mode error si on fait une requête et qu'il y a une erreur
        } catch(PDOException $e) {
            echo 'Erreur de connexion' . $e->getMessage();
        }

        return $this->connexion; // retourner la connexion pour terminer
    }


}



?>