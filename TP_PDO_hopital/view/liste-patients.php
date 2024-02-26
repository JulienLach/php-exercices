<?php 
include_once 'header.php';
require_once '../controller/liste-patients.php';
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Téléphone</th>
        <th>Mail</th>
    </tr>
    <?php foreach ($patients as $patient): ?>
    <tr>
        <td><?= $patient['lastname'] ?></td>
        <td><?= $patient['firstname'] ?></td>
        <td><?= $patient['birthdate'] ?></td>
        <td><?= $patient['phone'] ?></td>
        <td><?= $patient['mail'] ?></td>
        <td><a href="profil-patient.php?id=<?= $patient['id'] ?>">Profil</a></td> <!-- On envoie l'id du patient dans l'url pour pouvoir le récupérer dans le fichier profil-patient.php -->
    </tr>
    <?php endforeach; ?>
</table>
