<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods". 
  Objects can be created from classes.
*/

class User {
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Un constructeur est une méthode qui s'applique quand un objet est créé
    public function __construct($name, $email, $password) {
        // echo 'constructeur lancé : ';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Methods are functions that belong to a class. 
    function setName($name) {
      $this->name = $name; // this se réfère à l'objet User. dans l'idée c'est User->name
    }

    function getName() {
        return $this->name;
    }
}  

// Instancier un objet User
$user1 = new User("Bob", "email.gmail.com", "442523525");
$user2 = new User("Jean", "test.gmail.com", "4433333");

// echo $user1->email;
// echo $user2->name;

// $user1->setName("Bob");
// $user2->setName("John");

// var_dump($user1);
// var_dump($user2);

// echo $user1->getName();
// echo $user2->getName();


// l'héritage (inheritance) : Ajouter à mon objet User, des nouvelles propriétés
class employee extends User {

    // Définir la propriété title dans la class
    public $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle() { // créer la méthode qui va retourner le title
        return $this->title;
    }
}

$employee1 = new employee("Sara", "sara@gmail.com", "password222", "Manager");

echo $employee1->getTitle();







?>