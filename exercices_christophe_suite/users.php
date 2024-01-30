<?php
////// PARTIE 9 : LES PARAMETRES D'URL  //////

echo "<h2>Page users.php</h2>";

// Exercice 1 ajout du lien dans les users  // Exercice 2 ajouter ?id=0,1....
$user1 = array(
    "firstname" => "Steve",
    "lastname" => "Jobs",
    "email" => "steve.jobs@apple.com",
    "link" => '<a href="user.php?id=0"><u>Lien vers user.php</u></a>'
);
$user2 = array(
    "firstname" => "Bill",
    "lastname" => "Truc",
    "email" => "bill.truc@pomme.com",
    "link" => '<a href="user.php?id=1"><u>Lien vers user.php</u></a>'
);
$user3 = array(
    "firstname" => "Jeff",
    "lastname" => "Bisous",
    "email" => "jeff.bisous@amazon.com",
    "link" => '<a href="user.php?id=2"><u>Lien vers user.php</u></a>'
);
$user4 = array(
    "firstname" => "Julie",
    "lastname" => "Machin",
    "email" => "julie.machin@live.com",
    "link" => '<a href="user.php?id=3"><u>Lien vers user.php</u></a>'
);
$user5 = array(
    "firstname" => "Mark",
    "lastname" => "Zuck",
    "email" => "mark.zuck@facebook.com",
    "link" => '<a href="user.php?id=4"><u>Lien vers user.php</u></a>'
);
$user6 = array(
    "firstname" => "Sundar",
    "lastname" => "Bob",
    "email" => "sundar.bob@facebook.com",
    "link" => '<a href="user.php?id=5"><u>Lien vers user.php</u></a>'
);

// Tableau associatif user1
$users = array($user1, $user2, $user3, $user4, $user5, $user6);

foreach ($users as $user) {
    echo "firstname: " . $user["firstname"] . ", lastname: " . $user["lastname"] . ", email: " . $user["email"] . $user['link'] . "<br>";
}

?>