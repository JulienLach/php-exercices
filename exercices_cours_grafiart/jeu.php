<!-- Chapitre 13 Les formulaires Grafikart -->
<?php
$title = "Page jeu.php";
// Checkbox
$parfums = [
    "Fraise" => 4,
    "Chocolat" => 5,
    "Vanille" => 3,
];
// Radio
$cornets = [
    "Pot" => 2,
    "Cornet" => 3
];
// Checkbox
$supplements = [
    "Pépites de chocolat" => 1,
    "Chantilly" => 0.5
];
$nombreADeviner = 150;
require 'header.php';
?>

<!-- // <?php
// if ($_POST['number'] > $nombreADeviner) {
//    echo "Votre chiffre est trop grand";
// } elseif (($_POST['number'] < $nombreADeviner)) {
//    echo "Votre chiffre est trop petit";
//} else {
//    echo "Vous avez le bon chiffre !";
//}
// ?> -->

<!-- <form action="jeu.php" method="POST">
    <label for="number">Nombre</label>
    <input type="number" name="number" placeholder="Rentrer un chiffre entre 0 et 200">
    <button type="submit">Trouver le nombre</button>
</form> -->

<!-- Exercice 2 -->
<!-- <form action="jeu.php" method="GET">
    <label for="parfum">Choisir un parfum</label>
    <input type="checkbox" name="parfum[]" value="Fraise">Fraise<br>
    <input type="checkbox" name="parfum[]" value="Vanille">Vanille<br>
    <input type="checkbox" name="parfum[]" value="Chocolat">Chocolat<br>
    <button type="submit">Choisir un parfum</button>
</form>
-->

<h2>Composez votre glace</h2>
<form action="jeu.php" method="GET">
    <?php foreach($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="parfum[]" value="<?php echo $parfum; ?>">
                <?php echo $parfum ?> - <?php echo $prix ?> €
            </label>
        </div>
    <?php endforeach; ?>
    <button type="submit">Valider votre glace</button>
</form>


<pre>
    <h3>var_dump $_POST</h3>
    <?php var_dump($_POST) ?>
</pre>
<pre>
    <h3>var_dump $GET</h3>
    <?php var_dump($_GET) ?>
</pre>


<?php require 'footer.php'; ?>