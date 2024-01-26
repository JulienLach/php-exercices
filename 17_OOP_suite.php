<?php
// https://www.youtube.com/watch?v=dQxuYRNbL_M&list=WL&index=4&t=478s

// Les classes sont la base de l'OOP
// Elles sont définies par des propriétés et des méthodes
// Les propriétés sont des attribus de la classe
// les méthodes sont des fonctions à lintérieur des classes. Elles sont différentes des fonctions classique.
// 


// class Customer {
//     public $id; // je peux acceder à cette propriété en dehors de cette classe
//     private $name; // je ne peux pas acceder à cette propriété en dehors de cette classe, uniquement à l'intérieur
//     protected $email; // pas d'accès en dehors sauf pour les classes qui "extend Customer"
// }

// class MyClass extends Customer {
// $email devient accessible
// }

// Bonne pratique PHP des propriété en "private" et des méthodes en "public"

class Customer {
    // Propriétés de la classe Customer
    private $id = 1;
    private $name;
    protected $email; 
    private $balance;

    // Méthode Constructor, c'est une fonction/méthode spéciale qui va se lancer dès que l'on va créer un nouvel objet
    public function __construct($id, $name, $email, $balance) {
        // echo "Le constructeur se lance dès qu'un nouvel objet est lancé";
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }
    
    public function getEmail() {
        return $this->email;
    }
    // Méthode magique
    // public function __destruct() {
    //     echo "le déconstructeur se lance dès qu'un nouvel objet est lancé";
    // }


    // Méthode pour initialiser la propriété $id de l'objet Customer
    // public function getCustomer($id){
    //     // Utilisation de $this-> pour faire référence à la propriété $id de l'objet en cours
    //     // $this est un terme spécial en PHP qui fait référence à l'instance de la classe en cours.
    //     // $this->id ferait référence à la propriété $id de l'objet Customer en cours.
    //     $this->$id = $id;
    //     // return 'John Doe';
    //     return $this->$id;
    // }
}

// Intstancier la classe, cela me donne un nouvel objet/ une nouvelle instance Customer
// $customer = new Customer(1, 'Bob Test', 'bob@gmail.com', 0);

// Afficher l'id du nouvel objet $customer
// echo $customer->id;

// Afficher avec la méthode définie dans la classe, on doit avoir un ID pour qu'un nom de customer corresponde,
// Ici pas de base de donnée donc on défini id = 1 et return 'John doe" pour l'exemple
// echo $customer->getCustomer(1);

// echo $customer->getCustomer(10);

// echo $customer->getEmail();

// Une classe peut hériter d'une méthode d'une autre classe avec "extends"
class Subscriber extends Customer {

    public $plan;

    public function __construct($id, $name, $email, $balance, $plan) {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }

}

$subscriber = new Subscriber(1, 'Bob Test', 'bob@gmail2.com', 0, 'Plan Pro');

echo $subscriber->getEmail();


// Abstraction de classes
// PHP a des classes et méthodes abstraites. Les classes définies comme abstraites 
// ne peuvent pas être instanciées, et toute classe contenant au moins une méthode 
// abstraite doit elle-aussi être abstraite.


// Propriété statique et méthode statique
// Le fait de déclarer des propriétés ou des méthodes comme statiques 
// vous permet d'y accéder sans avoir besoin d'instancier la classe. 
// Celles-ci peuvent alors être accédées statiquement depuis une instance d'objet.

// class User {
//     public $username;
//     public $password;
//     public static $passwordLength = 5;

//     public static function getPasswordLength() {
//         return self::$passwordLength; // pas besoin du $this-> avec static
//     }
// }

// echo User::getPasswordLength();








?>