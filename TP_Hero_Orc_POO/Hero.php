<?php

class Hero extends Character {
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue) {
        parent::__construct($health, $rage);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    public function getWeapon() {
        return $this->weapon;
    }
    public function getWeaponDamage() {
        return $this->weaponDamage;
    }
    public function getShield() {
        return $this->shield;
    }
    public function getShieldValue() {
        return $this->shieldValue;
    }

    public function getStatistics() {
        echo "Hero : <br>";
        echo "Health: " . $this->health . "<br>";
        echo "Rage: " . $this->rage . "<br>";
        echo "Weapon: " . $this->weapon . "<br>";
        echo "Weapon Damage: " . $this->weaponDamage . "<br>";
        echo "Shield: " . $this->shield . "<br>";
        echo "Shield Value: " . $this->shieldValue . "<br>";
    }


    public function attacked($damage) {
        $damage = $damage - $this->shieldValue;
        echo "Dégats réels : " .$damage . "<br>";
        if ($this->shieldValue > 0) {
            $this->health = ($this->health) - $damage;
        }
        return $this->health;
    }

    // Tester le fonctionnement de la méthode attacked avant de faire la rageAugmente

    // Exercice 8 : A refaire
    // public function rageAugmente($coupsRecus) {
    //     foreach ($coupsRecus as $coup) {
    //         $this->rage = ($this->rage) + 30;
    //     }
    //     return $this->rage;
    // }
}
?>