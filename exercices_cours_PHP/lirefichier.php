<?php 
$title = "Lire un fichier"; 
include 'header.php';
?>  <!--include pour appeler une page dans un sous dossier -->


    <div class="container">
      <h2>Lire un fichier CSV</h2>
    </div>

    <?php
  if (($plats = fopen("food.csv", "r")) !== FALSE) { // fopen() ouvre un fichier ou une URL et retourne un pointeur de fichier resource.
    echo '<table>'; // On ouvre un tableau HTML
    while (($data = fgetcsv($plats, 1000, ",")) !== FALSE) { // fgetcsv() lit une ligne depuis un pointeur de fichier et analyse une chaîne CSV et retourne un tableau contenant les champs lus.
      echo '<tr>';
      foreach ($data as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
    fclose($plats); // fclose() ferme un pointeur de fichier resource
  }
  ?>

  </body>
</html>

<?php include 'footer.php'?>