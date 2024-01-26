<?php

// https://www.youtube.com/watch?v=BUCiSSyIGGU&list=WL&index=6&t=5450s Cours Travesy Media

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

// $name = 'Brad'; // String // Can be single or double quotes
// $age = 40; // Integer
// $hasKids = true; // Boolean
// $cashOnHand = 10.5; //Float

// var_dump($cashOnHand);

// /* --- Adding variables to strings -- */

// // Double quotes can be used to add variables to strings
// echo "$name is $age years old";

// // Better to do this
// echo "${name} is ${age} years old";

// // Concatenate Strings

// echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// // Arithmetic Operators

// echo 5 + 5;
// echo 10 - 6;
// echo 5 * 10;
// echo 10 / 2;

// // Constants - Cannot be changed
// define('HOST', 'localhost');
// define('USER', 'root');

// var_dump(HOST);


// PARTIE 1 EXERCICES CHRISTOPHE : LES VARIABLES //

var_dump("Hello" . "<br>");
// var_dump sert a débuguer le code PHP

// Exercice 1
$name = "john";
echo $name . "<br>";

// Exercice 2
$age = 25;
echo $age . "<br>";
$weight = 70.5;
echo $weight . "<br>";
$height = 175;
echo $height . "<br>";

// Exercice 3
echo $weight * 1000 ." grammes" . "<br>";
echo $height / 100 . " mètres" . "<br>";

// Exercice 4
$bmi = $weight / (($height / 100) * ($height / 100));
echo $bmi . "<br>";

// Exercice 5
$var = null;
echo $var . "<br>";
$var = 42;
echo $var . "<br>";

// Exercice 6
$color = "blue";
echo "<p style='color: $color; text-transform: uppercase;'>La couleur en majuscules : $color</p>";

// Afficher la couleur en minuscules
echo "<p style='color: $color; text-transform: lowercase;'>La couleur en minuscules : $color</p>";

// Afficher la couleur en couleur
echo "<p style='color: $color;'>La couleur : $color</p>";

?>
