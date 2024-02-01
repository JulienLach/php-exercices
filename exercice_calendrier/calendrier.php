<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice Calendrier</title>
</head>
<body>
    
</body>
</html>

<form>
    <label for="month">Mois :</label>
    <!-- Choisir le mois -->
    <select name="month" id="month">
        <?php
        $months = [
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre',
        ];
        foreach ($months as $monthNumber => $monthName) {
            echo "<option value=\"$monthNumber\">$monthName</option>";
        }
        ?>
    </select>

    <label for="year">Année :</label>
    <!-- Choisir l'année -->
    <select name="year" id="year">
        <?php
        $currentYear = date('Y, d');
        $startYear = $currentYear - 10;
        $endYear = $currentYear + 10;

        for ($year = $startYear; $year <= $endYear; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>


    <?php
    // Afficher tous les jours du mois sélectionné avec une boucle foreach
    $joursDeLaSemaine = [
        1 => 'Lundi',
        2 => 'Mardi',
        3 => 'Mercredi',
        4 => 'Jeudi',
        5 => 'Vendredi',
        6 => 'Samedi',
        7 => 'Dimanche',
    ];

    if (isset($_GET['month']) && isset($_GET['year'])) { // Si les paramètres month et year sont présents dans l'URL
        $joursDansLeMois = cal_days_in_month(CAL_GREGORIAN, $_GET['month'], $_GET['year']); // Nombre de jours dans le mois

        $jours = []; // Tableau qui va contenir tous les jours du mois
        for ($jour = 1; $jour <= $joursDansLeMois; $jour++) { // Pour chaque jour du mois
            $date = new DateTime($_GET['year'].'-'.$_GET['month'].'-'.$jour); // Créer une date avec le jour en cours
            $jourDeLaSemaine = $joursDeLaSemaine[$date->format('N')]; // Récupérer le jour de la semaine correspondant à la date en cours (N = 1 pour lundi, 2 pour mardi, etc) dans le tableau $joursDeLaSemaine
            $jours[] = $jour . ' (' . $jourDeLaSemaine . ')'; // Ajouter le jour au tableau
        }
    }

    foreach ($jours as $jour) { // Pour chaque jour du tableau
        echo "$jour<br>"; // Afficher le jour avec le nom du jour correspondant
    }
    ?>
    
    <input type="submit" value="Valider">
</form>


<!-- Tableau des jours -->
<?php
echo '<table>'; // Début du tableau
echo '<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>'; // Créer la ligne d'en-tête du tableau avec les jours de la semaine

$jourDeLaSemaineDuPremierJour = date('N', mktime(0, 0, 0, $_GET['month'], 1, $_GET['year'])); // Récupérer le jour de la semaine du premier jour du mois (N = 1 pour lundi, 2 pour mardi, etc)

// Ajouter des cellules vides pour les jours précédant le premier jour du mois
for ($i = 1; $i < $jourDeLaSemaineDuPremierJour; $i++) {
    echo '<td"></td>'; // Ajouter une cellule vide
}

foreach ($jours as $jour) { // Pour chaque jour du tableau
    if ($jourDeLaSemaineDuPremierJour % 7 == 1) { // Si le modulo de $jourDeLaSemaineDuPremierJour par 7 est égal à 1 (donc si on est lundi)
        echo '<tr>'; // Créer une nouvelle ligne
    }

    echo "<td>$jour</td>"; // Afficher le jour dans une cellule

    if ($jourDeLaSemaineDuPremierJour % 7 == 0) {
        echo '</tr>';
    }

    $jourDeLaSemaineDuPremierJour++;
}

// Ajouter des cellules vides pour les jours suivant le dernier jour du mois
for ($i = $jourDeLaSemaineDuPremierJour; $i <= 7; $i++) {
    echo '<td></td>';
}

echo '<table>'; // Fin du tableau

?>