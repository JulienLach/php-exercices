<?php
require_once 'database.php';

class Patient {
    private $id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;

    // Définir les données du patient dans un constructeur
    public function __construct($lastname, $firstname, $birthdate, $phone, $mail)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
        $this->mail = $mail;
    }

    // Définir les geters
    public function getId()
    {
        return $this->id;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getMail()
    {
        return $this->mail;
    }

    // Définir les seters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    // Méthode pour ajouter un patient
    public function addPatient() {
        $connexion = Database::connect();
        $query = 'INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $statement->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $statement->bindParam(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $statement->bindParam(':phone', $this->phone, PDO::PARAM_STR);
        $statement->bindParam(':mail', $this->mail, PDO::PARAM_STR);
        $statement->execute();     
    }

    public function updatePatient() {
        $connexion = Database::connect();
        $query = 'UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $this->id, PDO::PARAM_INT);
        $statement->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $statement->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $statement->bindParam(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $statement->bindParam(':phone', $this->phone, PDO::PARAM_STR);
        $statement->bindParam(':mail', $this->mail, PDO::PARAM_STR);
        $statement->execute();
    }
}