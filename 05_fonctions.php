<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser($email)
{
  echo $email . ' User has been registered!';
}
// Running a function
registerUser("test@gmail.com");

echo "<br>";


// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 6);
echo $sum;

echo "<br>";

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 + $num2;
}

echo subtract();

echo "<br>";

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
  };
  
echo $add(5, 5);

echo "<br>";

  
// Arrow functions  // fn pour les arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);


?>