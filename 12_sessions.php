<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {
    $username = filter_input(
      INPUT_POST,
      'username',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ); 

    $password = $_POST['password'];

    if ($username == "bob" && $password =="password") {
        $_SESSION['username'] = $username;
        header('Location: /cours-PHP/dossier/dashboard.php'); // pour rediger le client vers un chemin précis
    } else {
        echo 'Identifant ou mot de passe incorrect';
      }
}
?>

<!-- Créer un formulaire simple de connexion à une session -->
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>