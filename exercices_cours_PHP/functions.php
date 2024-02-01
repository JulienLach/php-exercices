<?php

function nav_item(string $lien, string $titre): string { // la fonction retourne une string
    $link = '<a href="' . $lien . '">' . $titre . '</a>';
    return '<li>' . $link . '</li>';
  }

function creneaux_html(array $creneaux) { // Fonction pour afficher les créneaux définis
  $horaires = []; // COnstruire le tableau intermédiaire
  if (count($creneaux) === 0) {
    return 'Fermé';
  }
  foreach($creneaux as $creneau) {
    $horaires[] = " de {$creneau[0]}h à {$creneau[1]}h";
  }
  // print_r($horaires);
  return 'Ouvert ' . implode(' et ', $horaires); // On retourne une string (implode) qui contient les horaires séparés par ' et '
}

function in_creneaux(int $heure, array $creneaux): bool {
  foreach($creneaux as $creneau) {
    $debut = $creneau[0];
    $fin = $creneau[1];
    if ($heure >= $debut && $heure < $fin) {
      return true;
    }
    return false;
  }
}


?>


