<?php 

// Exercice 1
function afficherNombre($nombre) {
    return $nombre;
}
echo afficherNombre(4);

echo "<br>";

// Exercice 2
function SommeNombres($nombre1, $nombre2) {
    return ($nombre1 + $nombre2);
}
echo SommeNombres(4, 4);

echo "<br>";

// Exercice 3 : Utilisation de la fonction sur chaine : implode — Rassemble les éléments d'un tableau en une chaîne
$students = ['Anatole', 'Benjamin', 'Caroline', 'David', 'Emilie', 'Fabien', 'Gustave', 'Henri', 'Isidore', 'Jean'];

function listePrenom($students) {
    echo "La liste des prénoms est : " . implode(', ', $students);
}
listePrenom($students);

echo "<br>";

// Exercice 4 : Utilisation des fonction array_sul et count pour faire la moyenne d'un tableau
$marks=[1,12,5,15,17,3,9,10,11,19];

function calculMoyenne($marks) {
    $moyenne = array_sum($marks)/count($marks);
    return $moyenne;
}
echo calculMoyenne($marks);

echo "<br>";

// Exercice 5 : 
function affichageNotesStudents($students, $marks) {
    // fonction count pour vérifier si le nomre de note = nombre d'étudnats
    if (count($students) != count($marks)) {
        echo "le nombre de note n'est pas égal au nombre d'étudiants";
        return false;
    }
    // Associez les étudiants à leurs notes
    $associationNoteEtudiant = array_combine($students, $marks);

    foreach ($associationNoteEtudiant as $student => $mark) {
        if ($mark >= 0 && $mark <= 5) {
            $message = "Au travail !";
        } elseif ($mark > 5 && $mark <= 11) {
            $message = "les efforts fournis ne sont pas suffisants";
        } elseif ($mark > 11 && $mark <= 16) {
            $message = "Bon travail";
        } elseif ($mark > 16 && $mark <= 20) {
            $message = "Excellent travail";
        } else {
            $message = " ";
        }

        echo "$student-$mark, $message <br>";
    }
    // Renvois la liste des étudiants avec leurs notes associés
    return $associationNoteEtudiant;
}
echo affichageNotesStudents($students, $marks);


// Exercice 6 : 

?>