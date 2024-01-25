<?php

// PARTIE 3 : LES TABLEAUX

// Exercice 1
$firstnames = ["Steve", "Jeff", "Marck", "Sundar"];
// $firstnames = array("Steve", "Jeff", "Marck", "Sundar"); Quel est la différences ?

// Exercice 2 : Utilisation de la fonction array_replace : https://www.php.net/manual/en/function.array-replace.php
$remplacement = array(2 => "Markkkkkk");
$nouveauTableau = array_replace($firstnames, $remplacement);
print_r($nouveauTableau);

echo "<br>";

// Exercice 3 : Utilisation de la fonction array_push
array_push($firstnames, "Bill");
print_r($firstnames);

echo "<br>";

// Exercice 4 : Utilisation de la fonction array_unshift
array_unshift($firstnames, "Julie");
print_r($firstnames);

echo "<br>";

// Exercice 5 : Utilisation de la méthode sort() et de la boucle foreach
sort($firstnames);
foreach ($firstnames as $key => $val) {
    echo  $val . "\n";
}

echo "<br>";

// Exercice 6 : Affichage d'une valeur du tableau à partir de son index
echo $firstnames[0];

echo "<br>";

// Exercice 7 : Utilisation de la fonction count pour un array, compte le nomdre d'éléments
print_r(count($firstnames) . " prénoms dans le tableau");

echo "<br>";

// Exercice 8 : boucle foreach pour le array
foreach($firstnames as $firstname) {
    echo $firstname . "<br>";
}

// Exercice 9 : Tableau associatif user1
$user1 = array(
    "firstname" => "Steve",
    "lastname" => "Jobs",
    "email" => "steve.jobs@apple.com"
);
$user2 = array(
    "firstname" => "Bill",
    "lastname" => "Truc",
    "email" => "bill.truc@pomme.com"
);
$user3 = array(
    "firstname" => "Jeff",
    "lastname" => "Bisous",
    "email" => "jeff.bisous@amazon.com"
);
$user4 = array(
    "firstname" => "Julie",
    "lastname" => "Machin",
    "email" => "julie.machin@live.com"
);
$user5 = array(
    "firstname" => "Mark",
    "lastname" => "Zuck",
    "email" => "mark.zuck@facebook.com"
);
$user6 = array(
    "firstname" => "Sundar",
    "lastname" => "Bob",
    "email" => "sundar.bob@facebook.com"
);

// Exercice 10 : Tableau associatif user1
$users = array($user1, $user2, $user3, $user4, $user5, $user6);

// Exercice 11
echo "L'email du patron de meta est {$user5['email']}";
echo "<br>";
echo "Le patron de Microsoft s’appelle {$user2['firstname']}";
echo "<br>";
echo "Dans un monde si masculin, Yuka à été fondé en 2016, notamment par {$user4['firstname']}";
echo "<br>";

// Exercice 12 : Boucler sur le Tableau associatif users
foreach ($users as $user) {
    echo "Firstname: " . $user["firstname"] . ", lastname: " . $user["lastname"] . ", Email: " . $user["email"] . "<br>";
}


?>