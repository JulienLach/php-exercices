<?php require_once 'database.php'; ?>

<?php

class Patient {
    private $id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;
    private $dateHour;

    public function setDateHour($dateHour) {
        $this->dateHour = $dateHour;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function setMail($mail) {
        $this->mail = $mail;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function addPatient () {
        $connexion = Database::connect();
        $query = 'INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':lastname', $this->lastname);
        $statement->bindParam(':firstname', $this->firstname);
        $statement->bindParam(':birthdate', $this->birthdate);
        $statement->bindParam(':mail', $this->mail);
        $statement->bindParam(':phone', $this->phone);
        $statement->execute();
    }

    public function getAllPatients() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM patients';
        $statement = $connexion->query($query);
        $patients = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $patients;
    }

    public function getPatientById() {
        if(isset($_GET['id'])) {
            $connexion = Database::connect();
            $query = 'SELECT * FROM patients WHERE id = :id';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':id', $_GET['id']);
            $statement->execute();
            $patient = $statement->fetch();
            return $patient;
        }
    }

    public function updatePatient() {
        if(isset($this->id)) {
            $connexion = Database::connect();
            $query = 'UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':lastname', $this->lastname);
            $statement->bindParam(':firstname', $this->firstname);
            $statement->bindParam(':birthdate', $this->birthdate);
            $statement->bindParam(':mail', $this->mail);
            $statement->bindParam(':phone', $this->phone);
            $statement->bindParam(':id', $this->id);
            $statement->execute();
        }
    }

    public function deletePatientEtRdv() {
        if(isset($_GET['id'])) {
            $connexion = Database::connect();
    
            // Supprimer en premier les rendez-vous associés au patient sinon problème de foreign key
            // On évite les DELETE avec des JOIN
            $query = 'DELETE FROM appointments WHERE idPatients = :id';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':id', $_GET['id']);
            $statement->execute();
            // Supprimer le patient
            $query = 'DELETE FROM patients WHERE id = :id';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':id', $_GET['id']);
            $statement->execute();
        }
    }

    public function searchPatients() {
        if(isset($_POST['search'])) {
            $connexion = Database::connect();
            $query = 'SELECT * FROM patients WHERE lastname LIKE :search OR firstname LIKE :search';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':search', '%' . $_POST['search'] . '%');
            $statement->execute();
            $patients = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(empty($patients)) {
                echo 'Aucun patient trouvé';
            }
            return $patients;
        }
    }

    public function getNombreTotalPatients() {
        $connexion = Database::connect();
        $query = 'SELECT COUNT(*) as nombreTotalPatients FROM patients';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        $nombreTotalPatients = $result['nombreTotalPatients'];
        return $nombreTotalPatients;
    }

    public function getAllPatientsPagination($premierPatient, $patientsParPage) {
        $connexion = Database::connect();
        $query = 'SELECT * FROM patients LIMIT :premierPatient, :patientsParPage';
        $statement = $connexion->prepare($query);
        $statement->bindValue(':premierPatient', $premierPatient, PDO::PARAM_INT);
        $statement->bindValue(':patientsParPage', $patientsParPage, PDO::PARAM_INT);
        $statement->execute();
        $patients = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $patients;
    }

    public function addPatientsEtRendezvous() {
        $connexion = Database::connect();
        $query = 'INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':lastname', $this->lastname);
        $statement->bindParam(':firstname', $this->firstname);
        $statement->bindParam(':birthdate', $this->birthdate);
        $statement->bindParam(':mail', $this->mail);
        $statement->bindParam(':phone', $this->phone);
        $statement->execute();

        // récupérer l'id du patient ajouté pour ensuite faire l'ajout du rendez-vous avec cet ID
        $idPatients = $connexion->lastInsertId();
        
        $query = 'INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':dateHour', $this->dateHour);
        $statement->bindParam(':idPatients', $idPatients);
        $statement->execute();
    }
}