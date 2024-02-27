<?php require_once 'database.php'; ?>

<?php

class Patient {
    private $id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;

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
}