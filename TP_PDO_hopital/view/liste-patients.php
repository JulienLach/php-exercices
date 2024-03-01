<?php
require_once '../view/header.php';
require_once '../controller/liste-patients-pagination.php';
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

<nav>
    <ul class="pagination">
        <li class="page-item <?= ($pageActuelle == 1) ? "disabled" : ""?>">
            <a class="page-link" href="?page=<?php if($pageActuelle > 1) {echo $pageActuelle - 1;} else {echo $pageActuelle;} ?>">Précédent</a>
        </li>
        <li class="page-item <?= ($pageActuelle == $nombrePages) ? "disabled" : ""?>">
            <a class="page-link" href="?page=<?php if($pageActuelle < $nombrePages) {echo $pageActuelle + 1;} else {echo $pageActuelle;} ?>">Suivant</a>
        </li>
    </ul>
</nav>

<!-- Pour la pagination passer dans l'URL la valeur de la page : ?page=2 -->
<!-- Connaitre le nombre de patients que l'ont veut par page : = 3 -->
<!-- Connaitre le nombre de patients au total pour définir le nombre de page à générer -->