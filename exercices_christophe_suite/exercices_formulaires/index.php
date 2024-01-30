<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 2 PHP</title>
</head>
<body>

<h2>Formulaire 2 PHP</h2>

<form id="formulaire" method="get" action="index.php">
    <label for="civilité">Civilité :</label>
    <select name="civilite" id="civilite">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label>Choisir un fichier </label>
    <input type="file" id="fichier" name="fichier" accept=".pdf"/>


    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['civilite']) && isset($_GET['fichier'])) {
    // Stocker let GET dans des variables pour les afficher
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $civilite = $_GET['civilite'];
    $fichier = $_GET['fichier'];
    $file_extension = pathinfo($fichier, PATHINFO_EXTENSION);

    echo "Civilité : $civilite, Prénom : $prenom, Nom : $nom, Fichier : $fichier";
    echo "<br>";
}

if ($file_extension === "pdf") {
    echo "Le fichier est bien un PDF";
}

?>


</body>
</html>