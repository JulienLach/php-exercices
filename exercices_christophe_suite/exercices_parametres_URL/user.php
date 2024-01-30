<?php
include 'users.php';
echo '<br>';
echo '<br>';

// Exercice 3 : Les paramètres d'URL

// Vérifier si le paramètre "id" est présent dans l'URL
// if (isset($_GET['id'])) {
//     // Stocker la valeur de "id" dans la variable $id
//     $id = $_GET['id'];
//     echo "L'ID est défini. La valeur de ' id ' est : " . $id;
// } else {
//     // Rediriger vers la page users.php si le paramètre "id" n'est pas défini dans l'URL
//     header('Location: users.php');
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page user.php</title>
</head>
<body>
    <h3>Page user.php</h3>

    <!-- Exercice 4 : afficher nom et prénom du user + nom/prénom cliquable vers email -->
    <?php 
        if(isset($_GET['id'])) {
            $user = $users[$id];
            echo '<a href="mailto:"><u>' . $user['firstname'] . " " . '</u></a>';
            echo '<a href="mailto:"><u>' . $user['lastname'] . " " . '</u></a>';
            echo '<br>';
        }

        // Formulaire avec méthode get
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            // Stocker les valeurs de "lastname" et "firstname" dans les variables correspondantes
            $lastname = $_GET['lastname'];
            $firstname = $_GET['firstname'];
            echo "lastname : $lastname, firstname : $firstname";
        }

        // Exercice 6 : afficher la couleur

        // if(isset($_GET['color'])) {
        //     $couleur = $_GET['color'];
        //     echo $couleur;
        //     echo '<br>';
        // }

        // if($couleur === "orange") {
        //     echo "<p style='color: #ED7F10'>Couleur : $couleur</p>";
        // }
        // if($couleur === "purple") {
        //     echo "<p style='color: purple'>Couleur : $couleur</p>";
        // }
        // if($couleur === "blue") {
        //     echo "<p style='color: blue'>Couleur : $couleur</p>";
        // }
        // if($couleur === "red") {
        //     echo "<p style='color: red'>Couleur : $couleur</p>";
        // }
        // if($couleur === "yellow") {
        //     echo "<p style='color: yellow'>Couleur : $couleur</p>";
        // }
        // if($couleur === "green") {
        //     echo "<p style='color: green'>Couleur : $couleur</p>";
        // }
    ?>
</body>
</html>