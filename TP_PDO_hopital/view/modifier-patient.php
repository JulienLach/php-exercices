<?php 
include_once 'header.php';
require_once '../controller/profil-patient.php';
?>

<form class="form" action="../controller/update-patient.php" method="POST">
    <h3>Modifier le patient</h3>
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname" value="<?= $patient['lastname'];?>">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" value="<?= $patient['firstname'];?>">
    <label for="birthdate">Date de naissance</label>
    <input type="date" name="birthdate" id="birthdate" value="<?= $patient['birthdate'];?>">
    <label for="phone">Téléphone</label>
    <input type="tel" name="phone" id="phone" value="<?= $patient['phone'];?>">
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail" value="<?= $patient['mail'];?>">
    <input type="submit" value="Modifier un patient">
</form>

</body>
</html>