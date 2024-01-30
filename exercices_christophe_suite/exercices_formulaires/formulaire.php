<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
</head>
<body>

<h2>Formulaire PHP</h2>

<form method="post" action="../exercices_parametres_URL/user.php">
    <label for="lastname">Nom :</label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="firstname">Prénom :</label>
    <input type="text" id="firstname" name="firstname" required>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
