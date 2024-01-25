<?php

// Verif si le submit a été cliqué avec if et isset
if (isset($_POST['submit'])) {

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    // Vérifier si l'input upload n'est pas vide
    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        // Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // Valider l'extension du fichier
        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                // Upload file
                move_uploaded_file($file_tmp, $target_dir);
                // Ajouter le code ici pour traiter le cas où l'extension et la taille du fichier sont valides
                // Par exemple, vous pourriez déplacer le fichier vers le répertoire de destination, etc.
                $message = '<p style="color: green;">Fichier valide et taille correcte</p>';
            } else {
                $message = '<p style="color: red;">Le fichier est trop grand</p>';
            }
        } else {
            $message = '<p style="color: red;">Type de fichier non valide</p>';
        }
    } else {
        $message = '<p style="color: red;">Choisissez un fichier</p>';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<?php echo $message ?? null; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    Selectionner l'image à envoyer:
  <input type="file" name="upload">
  <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>