<?php
require_once '../view/header.php';
require_once '../controller/liste-rendezvous.php';
?>

<table>
    <tr>
        <th>Date et heure</th>
        <th>Nom du patient</th>
    </tr>
    <?php foreach ($rendezVous as $rdv): ?>
    <tr>
        <td><?= $rdv['dateHour'] ;?></td>
        <td><?= $rdv['lastname'] ?></td>
        <td><a href="rendezvous.php?id=<?php echo $rdv['idRendezVous'] ?>">Afficher le rendez-vous</a></td>
        <td></td>
        <td><a href="../controller/supprimer-rendezvous.php?id=<?php echo $rdv['idRendezVous'] ?>">Supprimer le rendez-vous</a></td>
    </tr>
    <?php endforeach; ?>

</table>