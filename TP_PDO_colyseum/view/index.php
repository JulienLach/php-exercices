<?php
require_once '../controller/afficher-client.php';
require_once '../controller/afficher-type-spectacle.php';
require_once '../controller/afficher-spectacle.php';

foreach ($clients as $client) {
    echo $client['id'] . ' ' . $client['lastName'] . ' ' . $client['firstName'] . '<br>';
}

echo '<br>';

foreach ($spectaclesTypes as $spectaclesType) {
    echo $spectaclesType['id'] . ' ' . $spectaclesType['type'] . '<br>';
}

echo '<br>';

foreach ($clientsLimit as $clientLimit) {
    echo $clientLimit['id'] . ' ' . $clientLimit['lastName'] . ' ' . $clientLimit['firstName'] . '<br>';
}

echo '<br>';

foreach ($clientsCard as $clientCard) {
    echo $clientCard['id'] . ' ' . $clientCard['lastName'] . ' ' . $clientCard['firstName'] . '<br>';
}

echo '<br>';

foreach ($clientsName as $clientName) {
    echo 'Nom du client: ' . $clientName['lastName'] . '<br>';
    echo 'Prénom du client: ' . $clientName['firstName'] . '<br>';
    echo '<br>';
}

echo '<br>';

foreach ($spectacles as $spectacle) {
    echo "Spectacle par " . $spectacle['performer'] . " le " . $spectacle['date'] . " à " . $spectacle['startTime'] . '<br>';
}

echo '<br>';

foreach ($clients as $client) {
    echo "Nom : " . $client['lastName'] . '<br>';
    echo "Prénom : " . $client['firstName'] . '<br>'; ;
    echo "Date de naissance : " . $client['birthDate'] . '<br>' ;
    if ($client['card'] == 1) {
        echo "Carte de fidélité : Oui" . '<br>';
        echo "Numéro de carte : " . $client['cardNumber'] . '<br>';
    } else {
        echo "Carte de fidélité : Non" . '<br>';
    }
    echo '<br>';
}

?>