<?php
class Creneau {
    public $debut;
    public $fin;

    public function __construct(int $debut, int $fin) { // Constructeur de la classe
        $this->debut = $debut; // $this->debut correspond à la propriété de l'objet, $debut correspond à l'argument de la méthode
        $this->fin = $fin;
    }

    public function inclusHeure(int $heure) {
        return $heure >= $this->debut && $heure <= $this->fin;
    }

    public function intersect(Creneau $creneau): bool { // On vérifie si les deux créneaux se chevauchent ou non je peut définir l'objet en argument pour préciser que je veux un objet de type Creneau
        return $this->inclusHeure($creneau->debut) || $this->inclusHeure($creneau->fin); // Si le début ou la fin du créneau est inclus dans le créneau
    }

}


?>