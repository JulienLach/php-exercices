<?php
require_once 'Character.php';
require_once 'Hero.php';
require_once 'Orc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>TP Hero-Orc POO</title>
    <section>
        <div class="container">
            <div class="personnages">
            <div class="hero">
                <?php
                echo '<img src="img/Unlucky_Footman_face.png" alt="Hero" width="100" height="100">';
                echo "<br>";
                $hero = new Hero (1000, 0, "Épée longue", 150, "Bouclier en fer", 450);
                $hero->getStatistics();
                ?>
            </div>
            <div class="orc">
                <?php
                echo '<img src="img/Peon_face_WC3.png" alt="Hero" width="100" height="100">';
                echo "<br>";
                $orc = new Orc (250, 0);
                ?>
            </div>
            </div>
            <div class="combat">
                <h2>Combat</h2>
                <?php
                // Boucle d'attaque
                for ($health = $hero->getHealth(); $health > 0; $health = $hero->getHealth()) {
                    $damage = $orc->attack();
                    echo "Dégâts brut infligés par l'orc : " . $damage . "<br>";
                    $hero->attacked($damage);
                    $hero->getStatistics();
                    $hero->rageAugmente();
                    echo "<br>";
                }
                ?>
            </div>
        </div>
    </section>

</head>
<body>
    
</body>
</html>


