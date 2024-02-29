<?php
require_once '../view/header.php';
require_once '../controller/liste-patients.php';
?>

<form action="../view/liste-recherche-patients.php" method="POST">
    <strong><label for="search">Rechercher un patient</label></strong>
    <input name="search" type="search" required>
    <input type="submit" value="Rechercher un patient">
</form>


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
        <td> <?php echo $patient['lastname'] ?> </td>
        <td> <?php echo $patient['firstname'] ?> </td>
        <td> <?php echo $patient['birthdate'] ?> </td>
        <td> <?php echo $patient['phone'] ?> </td>
        <td> <?php echo $patient['mail'] ?> </td>
        <td><a href="profil-patient.php?id=<?php echo $patient['id']?>">Afficher profil</a></td>
        <td><a href="../controller/supprimer-patient-rendezvous.php?id=<?php echo $patient['id']?>">Supprimer le patient et ses rendez-vous</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Pour la pagination il faut passer dans l'URL ?page=2 -->
<!-- Il faut également connaitre le nombre d'article que l'ont veut par page -->
<!-- Également le nombre d'article au total pour définir le nombre de page a générer -->