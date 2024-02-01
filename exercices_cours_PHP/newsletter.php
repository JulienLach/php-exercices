<?php
$error = null;
$success = null;
$title = "Newsletter";

include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d') . ".txt";
        file_put_contents($file, $email, FILE_APPEND);
        if ($email) {
            // Perform further actions if needed, such as storing the email in a database
            $success = "Votre email a bien été enregistré !";
        } else {
            $error = "Email invalide";
        }
    } else {
        $error = "Email non fourni";
    }
}
?>

<h2>S'inscrire à la newsletter</h2>
<form action="newsletter.php" method="POST">
    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">S'inscrire</button>

    <div>
        <?php if ($error): ?>
            <div style="background-color: #FFCCCB; padding: 1em">
            <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>

    <div>
        <?php if ($success): ?>
            <div style="background-color: lightgreen; padding: 1em">
            <?php echo $success; ?>
            </div>
        <?php endif; ?>
    </div>
</form>

<?php include 'footer.php' ?>
