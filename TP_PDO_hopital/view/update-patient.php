<?php 
include_once 'header.php';
require_once '../controller/update-patient.php';
?>

<?php
echo "id du patient ". $_GET['id'];
var_dump($patient['lastname']);
?>


<form class="form" action="../controller/do-update-patient.php" method="POST">
<h3>Modifier un patient</h3>
    <input type="hidden" name="patient_id" value="<?php echo $_GET['id'] ?>">
    <input class="text-form" type="text" name="lastname" placeholder="Nom" value="<?= $patient['lastname'];?>">
    <input class="text-form" type="text" name="firstname" placeholder="Prénom" value="<?= $patient['firstname'];?>">
    <label for="birthdate">Date de naissance</label>
    <input class="text-form" type="date" name="birthdate" placeholder="Date de naissance" value="<?= $patient['birthdate'];?>">
    <input class="text-form" type="tel" name="phone" placeholder="Numéro de téléphone" value="<?= $patient['phone'];?>">
    <input class="text-form" type="email" name="email" placeholder="Email" value="<?= $patient['mail'];?>">
    <button class="create-account-btn" type="submit">Modifier profil patient</button>
</form>