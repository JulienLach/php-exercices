<?php

class Orc extends Character {
    private $damage;

    public function __construct($health, $rage) {
        parent::__construct($health, $rage);
        echo 
        "Orc : "."<br>"."Health: " . $this->health . "<br>" . 
        "Rage: " . $this->rage . "<br>" ;
    }

    
    public function getDamage() {
        return $this->damage;
    }


    public function attack() {
        $damage = rand(600, 800);
        $this->damage = $damage;
        return $damage;
    }


}
?>