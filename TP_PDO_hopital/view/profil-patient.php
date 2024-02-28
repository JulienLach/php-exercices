<?php 
include_once 'header.php';
require_once '../controller/profil-patient.php';
require_once '../controller/rendezvous.php';
?>

<h3>Profil du patient</h3>
<?php

echo "<strong>Nom</strong> : " . $patient['lastname'] . '<br>';
echo "<strong>Prénom</strong> : " . $patient['firstname'] . '<br>';
echo "<strong>Date de naissance</strong> : " .$patient['birthdate'] . '<br>';
echo "<strong>Téléphone</strong> : " . $patient['phone'] . '<br>';
echo "<strong>Email</strong> : " . $patient['mail'] . '<br>';
echo "<h3>Rendez-vous du patient : </h3>";
if (empty($rendezVous)) {
    echo "Aucun rendez-vous pour ce patient";
} else {
    echo "<strong>Date</strong> : " . $rendezVous['dateHour'] . '<br>';
}
echo "<br>";
?>
<a href="modifier-patient.php?id=<?php echo $patient['id']; ?>">Modifier profil patient</a>