<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Date PHP</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
    <h3>Date PHP</h3>
</body>
</html>

<?php
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

echo "Nous sommes le : ";
echo $formatter->format(time());

// Exercice 2 - utilisation de la fonction existante
$nombreDeJourDansLeMois = cal_days_in_month(CAL_GREGORIAN, 1, 2024); // 31
echo "Il y a {$nombreDeJourDansLeMois} jour en Janvier 2024";

echo "<br>";

// Exercice 3
echo (time() . " secondes écoulées depuis le premier janvier 1970");

echo "<br>";

// Exercice 4
$dateTimestamp = 1712585169;
echo "Date de la prochaine eclipse : ";
echo date( "d/m/Y", $dateTimestamp);

// Exercice 5
echo "<br>";
$messageSecondes = "Il reste " . ((time()) - $dateTimestamp) . " secondes avant la prochaine éclipse solaire";
echo "<br>";
echo $messageSecondes;
echo "<br>";
$messageMinutes = "Il reste " . ((time()) - $dateTimestamp ) / 60 . " minutes avant la prochaine éclipse solaire";
echo $messageMinutes;
echo "<br>";
$messageHeures = "Il reste " . ((time()) - $dateTimestamp ) / 3600 . " heures avant la prochaine éclipse solaire";
echo $messageHeures;
echo "<br>";
$messageJours = "Il reste " . ((time()) - $dateTimestamp ) / 86400 . " jours avant la prochaine éclipse solaire";
echo $messageJours;


// Exercice 6
echo "<br>";
echo "Date en cours affichée avec l'objet DateTime : ";
$date = new DateTime();
echo $date->format("d-m-Y H:i:s");

// Exercice 7
echo "<br>";
echo "Date de naissance affichée avec DateTime : ";
$dateDeNaissance = new DateTime();
echo $dateDeNaissance = ("31-07-1996");

// Exercice 8
echo "<br>";

// Définir la date de naissance
$dateDeNaissanceMars = new DateTime('2003-03-15');

// Calculer l'âge
$aujourdHui = new DateTime(); // Ici c'est égal à aujourd'hui
$age = $aujourdHui->diff($dateDeNaissanceMars)->y;

// Créer un objet IntlDateFormatter pour formater la date en français
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

echo "<p>Je suis né le " . $formatter->format($dateDeNaissanceMars) . ". J'ai actuellement " . $age . " ans.</p>";


?>

