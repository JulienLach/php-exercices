<?php

function nav_item(string $lien, string $titre): string { // la fonction retourne une string
    $link = '<a href="' . $lien . '">' . $titre . '</a>';
    return '<li>' . $link . '</li>';
  }


?>


