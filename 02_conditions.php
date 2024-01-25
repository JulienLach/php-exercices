<?php

// PARTIE 2 : LES CONDITIONS //


/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/



$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}



// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
echo $posts[0];
} else {
echo 'There are no posts';
}

echo "<br>";

/* -------- Ternary Operator -------- */
/*
The ternary operator is a shorthand if statement.
Ternary Syntax:
  condition ? true : false;
*/
echo "<br>";

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;


/* -------- Switch Statements ------- */

echo "<br>";


$favcolor = 'red';

switch ($favcolor) {
case 'red':
  echo 'Your favorite color is red!';
  break;
case 'blue':
  echo 'Your favorite color is blue!';
  break;
case 'green':
  echo 'Your favorite color is green!';
  break;
default:
  echo 'Your favorite color is not red, blue, nor green!';
}


// PARTIE 2 EXERCICES CHRISTOPHE : LES CONDITIONS //

// Exercice 1
function majeurOuMineur($age) {
    if ($age >= 18) {
      return "vous êtes majeur";
    } else {
      return "vous êtes mineur";
    }
  }
  echo majeurOuMineur(20) . "<br>";
  
  // Exercice 2
  $isOK = true;
    if ($isOK) {
      echo "C'est bon !!" . "<br>";
    } else {
      echo "Ce n'est pas bon !!!" . "<br>";
    }
  
    // Initianliser en false avec !$isOK
    if (!$isOK) {
      echo "C'est bon !!" . "<br>";
    } else {
      echo "Ce n'est pas bon !!!" . "<br>";
    }
  
    // Deuxième écriture
    echo $isOK ? "C'est bon !!*" : "Ce n'est pas bon !!!*" ;
    echo !$isOK ? "C'est bon !!*" : "Ce n'est pas bon !!!*";
    echo "<br>";
  
  
  // Exercice 3
  
  $genre = ["Homme", "Femme"];
  
  function genreEtAge($age, $genre) {
    if ($age >= 18 && $genre == "Homme") {
      echo "Vous êtes un homme majeur";
    }
    elseif ($age < 18 && $genre == "Homme") {
      echo "Vous êtes un homme mineur";
    }
    elseif ($age >= 18 && $genre == "Femme") {
      echo "Vous êtes une femme majeur";
    }
    elseif ($age < 18 && $genre == "Femme") {
      echo "Vous êtes une femme mineur";
    }
  } 
  
  genreEtAge(13, "Femme");
  echo "<br>";
  
  // Exercice 4
  
  if ($bmi < 18.5) {
    echo "Maigreur";
  }
  elseif ($bmi >= 18.5 && $bmi <= 24.9 ) {
    echo "Corpulence normale";
  }
  elseif ($bmi >= 25 && $bmi <= 29.9 ) {
    echo "Surpoids";
  }
  if ($bmi > 30) {
    echo "Obésité";
  }
  
  echo "<br>";
  
  
  // Exercice 5
  
  // Traduire ce code avec des if et des else :
  //   echo ($gender != 'Homme') ? 'C\'est une développeuse
  //   !!!' : 'C\'est un développeur !!!';
  if ($gender != "Homme") {
    echo "C'est une développeuse !!!";
  } else {
    echo "C'est un développeur !!!";
  }
  
  echo "<br>";
  
  // Exercice 6
  // Traduire ce code avec des if et des else :
  // $state = ($age >= 18) ? 'Tu es
  // majeur' : 'Tu n\'es pas majeur';
  // echo $statut;
  $age = 20;
  
  if ($age >= 18) {
      $state = 'Tu es majeur';
  } else {
      $state = 'Tu n\'es pas majeur';
  }
  
  echo $state;
  echo "<br>";
  
  
  // Exercice 7
  // Traduire ce code avec des if et des else :
  // echo ($isOk == false) ? 'c\'est pas
  // bon !!!' : 'c\'est ok !!';
  if ($isOK == false) {
    echo  "C'est pas bon !!!";
  } else {
    echo "C'est ok !!";
  }
  
  echo "<br>";
  
  // Exercice 8
  
  // Traduire ce code avec des if et des else :
  //   echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
  if ($isOK) {
    echo "C'est ok !!*";
  } else {
    echo "C'est pas bon !!!*";
  }
  


?>