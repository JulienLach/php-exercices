<?php include 'inc/header.php' ?>  <!--include pour appeler une page dans un sous dossier -->
        

<?php

  // mettre des valeurs vides par défaut
  $name = $email = $body = '';
  $nameError = $emailError = $bodyError = '';

  // Envois du formulaire

  if (isset($_POST['submit'])) {
    // Valider le nom
    if (empty($_POST['name'])) {
      $nameError = "Rentrer un nom valide";
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['email'])) {
      $emailError = "Rentrer un email valide";
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['body'])) {
      $bodyError = "Rentrer un texte valide";
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // vérifier qu'il n'y pas d'erreur , d'input vide 
    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
      // ajouter le feedback à la base de donnée
      $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
    
      if(mysqli_query($connexion, $sql)) {
        // feedback ajouté à la base
        header('Location: feedback.php');
      } else {
        // echo 'Erreur' mysqli_error($connexion);
      }
    }
}
?>



      <h2>Feedback</h2>
        <p class="subtitle">Leave feedback</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <div>
            <label style="font-weight: bold; margin-bottom: 0.5rem" for="name">Name</label>
            <input
              type="text"
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              class="form-control <?php echo !$nameError ? :'is-invalid'; ?>"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
            <div class="invalid-feedback">
              <?php echo $nameError; ?>
            </div>
          </div>
          <div style="margin-bottom: 1.5rem">
            <label for="email" style="font-weight: bold; margin-bottom: 0.5rem"
              >Email</label
            >
            <input
              type="email"
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              class="form-control <?php echo !$emailError ? :'is-invalid'; ?>"
              id="email"
              name="email"
              placeholder="Enter your email"
            />
            <div class="invalid-feedback">
              <?php echo $emailError; ?>
            </div>
          </div>
          <div style="margin-bottom: 1.5rem">
            <label for="body" style="font-weight: bold; margin-bottom: 0.5rem"
              >Feedback</label
            >
            <textarea
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              class="form-control <?php echo !$bodyError ? :'is-invalid'; ?>"
              id="body"
              name="body"
              placeholder="Enter your feedback"
            ></textarea>
            <div class="invalid-feedback">
              <?php echo $bodyError; ?>
            </div>
          </div>
          <div style="margin-bottom: 1.5rem">
            <input
              type="submit"
              name="submit"
              value="Send"
              style="
                width: 100%;
                padding: 0.75rem;
                font-size: 1rem;
                background-color: #1e5b97;
                color: #fff;
                border: none;
                cursor: pointer;
                border-radius: 3px;
              "
            />
          </div>
        </form>
<?php include 'inc/footer.php' ?>
