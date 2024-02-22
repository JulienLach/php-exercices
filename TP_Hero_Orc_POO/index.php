<?php
require_once 'Character.php';
require_once 'Hero.php';
require_once 'Orc.php';

echo '<img src="img/Unlucky_Footman_face.png" alt="Hero" width="100" height="100">';
echo "<br>";
$hero = new Hero (1000, 0, "Épée longue", 150, "Bouclier en fer", 450);
$hero->getStatistics();

echo "<br>";

echo '<img src="img/Peon_face_WC3.png" alt="Hero" width="100" height="100">';
echo "<br>";
$orc = new Orc (250, 0);


echo "<br>";

// Faire la boucle d'attaque
for ($health = $hero->getHealth(); $health > 0; $health = $hero->getHealth()) {
    $damage = $orc->attack();
    echo "Dégâts brut infligés par l'orc : " . $damage . "<br>";
    $hero->attacked($damage);
    $hero->getStatistics();
    echo "<br>";
}





?>