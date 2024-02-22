<?php

class Character {
    protected $health;
    protected $rage;

    public function __construct($health, $rage) {
        $this->health = $health;
        $this->rage = $rage;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getRage() {
        return $this->rage;
    }
}
?>