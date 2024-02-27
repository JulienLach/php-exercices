<?php 
include_once 'header.php';
require_once '../controller/profil-patient.php';
?>


<h3>Profil du patient</h3>
<?php

echo "<strong>Nom</strong> : " . $patient['lastname'] . '<br>';
echo "<strong>Prénom</strong> : " . $patient['firstname'] . '<br>';
echo "<strong>Date de naissance</strong> : " .$patient['birthdate'] . '<br>';
echo "<strong>Téléphone</strong> : " . $patient['phone'] . '<br>';
echo "<strong>Email</strong> : " . $patient['mail'] . '<br>';
?>
<a href="update-patient.php?id=<?php echo $patient['id']; ?>">Modifier profil patient</a>
