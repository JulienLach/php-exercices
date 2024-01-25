<?php

/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];
$fruits = array("pomme", "banane", "orange");

echo $fruits[2];

// var_dump($numbers);

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
echo $numbers[0];
echo $numbers[1];

echo $numbers[3] + $numbers[4];



/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
  ];

echo $colors[1];

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
  ];
  
  echo $hex['red'];
  var_dump($hex);



/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];



// Array of people
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
    $person2, //   [...$person1]
    [
      'first_name' => 'Bob',
      'last_name' => 'Bill',
      'email' => 'bob@gmail.com',
    ],
    [
      'first_name' => 'Jean',
      'last_name' => 'Pierre',
      'email' => 'jean@gmail.com',
    ],
  ];
  
  echo $people[0]['first_name'];
//   var_dump($people);


// Encode to JSON
var_dump(json_encode($people));

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));











?>
