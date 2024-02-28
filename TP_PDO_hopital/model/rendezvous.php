<?php require_once 'database.php'; ?>

<?php

class RendezVous {
    private $id;
    private $dateHour;
    private $idPatients;

    public function setId($id) {
        $this->id = $id;
    }
    public function setDateHour($dateHour) {
        $this->dateHour = $dateHour;
    }
    public function setIdPatients($idPatients) {
        $this->idPatients = $idPatients;
    }

    public function addRendezVous() {
        $connexion = Database::connect();
        $query = 'INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':dateHour', $this->dateHour);
        $statement->bindParam(':idPatients', $this->idPatients);
        $statement->execute();
    }

    public function getAllRendezVous() {
        $connexion = Database::connect();
        $query = 'SELECT *, appointments.id as idRendezVous FROM appointments JOIN patients ON appointments.idPatients = patients.id';
        // Le JOIN permet de faire une jointure entre les 2 tables. Ici, on joint la table appointments avec la table patients.
        // ça permet de récupérer toutes les colonnes de la table appointments et toutes les colonnes de la table patients.
        // Donc de pouvoir les afficher dans le $rendezVous['COLONNE JOINTE'] (ex: $rendezVous['lastname'])
        $statement = $connexion->query($query);
        $rendezVous = $statement->fetchAll();
        return $rendezVous;
    }

    public function getRdvById() {
        if(isset($_GET['id'])) {
            $connexion = Database::connect();
            $query = 'SELECT * FROM appointments JOIN patients ON appointments.idPatients = patients.id WHERE appointments.id = :id OR appointments.idPatients = :id';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':id', $_GET['id']);
            $statement->execute();
            $rdv = $statement->fetch();
            return $rdv;
        }
    }

    public function updateRendezVous() {
        if(isset($this->id)) {
            $connexion = Database::connect();
            $query = 'UPDATE appointments SET dateHour = :dateHour WHERE id = :id';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':dateHour', $this->dateHour);
            $statement->bindParam(':id', $this->id);
            $statement->execute();
        }
    }

    public function deleteRendezVous() {
        if(isset($this->id)) {
            $connexion = Database::connect();
            $query = 'DELETE FROM appointments WHERE id = :id';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':id', $this->id);
            $statement->execute();
        }
    }
}