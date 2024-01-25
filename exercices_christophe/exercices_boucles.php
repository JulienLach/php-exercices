<?php

// Exercice 1

for($a=0; $a<10; $a++) {
    echo $a;
}

echo "<br>";

// Exercice 2

$x = 1;
do {
    echo "On y arrive presque:" . "<br>";
    $x++;
  } while ($x <= 15);


echo "<br>";






// Exercice 3

// Initialisation des variables
$name = "John Doe";
$age = 0;
$weight = 1.5; // Poids initial pour un nouveau-né
$height = 0.5; // Taille initiale pour un nouveau-né
$isOk;
$bmc = 23;

// Fonction pour calculer le BMI
function calculateBMI($weight, $height) {
    return $weight / ($height * $height);
}

// Fonction pour déterminer si le BMI est dans la catégorie de corpulence normale
function isBMIInNormalRange($bmi) {
    $minNormalBMI = 18.5;
    $maxNormalBMI = 24.9;
    return ($bmi >= $minNormalBMI && $bmi <= $maxNormalBMI);
}

// Boucle de vieillissement de 0 à 100 ans
for ($age = 0; $age <= 100; $age++) {
    // Mise à jour du poids et de la taille pour simuler la croissance
    $weight += 0.5;  // Exemple d'augmentation de poids chaque année
    $height += 0.02; // Exemple d'augmentation de taille chaque année

    // Calcul du BMI
    $bmi = calculateBMI($weight, $height);

    // Vérification de la catégorie de corpulence
    $isOk = isBMIInNormalRange($bmi);

    // Affichage des informations
    echo "Bonjour, je m'appelle $name, j'ai $age ans. Mon poids est $weight kg, ma taille est $height m.\n" . "<br>";

    if ($isOk) {
        echo "Je suis dans la catégorie de corpulence normale.\n" . "<br>";
    } else {
        echo "Je ne suis pas dans la catégorie de corpulence normale.\n" . "<br>";
    }

    echo "Mon BMI est $bmi.\n\n" . "<br>";
}







?>


