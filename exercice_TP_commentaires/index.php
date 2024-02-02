<?php
require_once 'class/Message.php';
require_once 'class/Liste.php';
$errors = null;
$succes = false;
$liste = new Liste('data' . DIRECTORY_SEPARATOR . 'messages', []);
if (isset($_POST['username'], $_POST['message'])) {
    $message = new Message($_POST['username'], $_POST['message']);
    if ($message->isValid()) {
        $liste->addMessage($message);
        $succes = true;
        $_POST = [];
    }
    else {
        $errors = $message->getErrors();
    }
}

$messages = $liste->getMessage();

$title = "Accueil";
require 'header.php'?>

<div class="container">
    <h2>Commentaires</h2>

    <?php if (!empty($errors)): ?>
            Formulaire invalide
    <?php endif ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input value="<?php echo htmlentities($_POST['username'] ?? '') ?>" type="text" name="username" placeholder="Votre nom d'utilisateur" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?>">            <?php if (isset($errors['username'])): ?>
                <div class="invalid-feedback">
                    <?php echo $errors['username'] ?>
                </div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <textarea type="text" name="message" placeholder="Votre message" class="form-control <?php echo isset($errors['message']) ? 'is-invalid' : '' ?>"><?php echo htmlentities($_POST['message'] ?? '') ?></textarea>            <?php if (isset($errors['message'])): ?>
                <div class="invalid-feedback">
                    <?php echo $errors['message'] ?>
                </div>
            <?php endif ?>
        </div>
        <button class="btn btn-primary">Envoyer</button>
    </form>

    <?php if (!empty($messages)): ?>
    <h1 class="mt-4">Liste des message</h1>

    <?php foreach($messages as $message): ?>
        <?php echo $message->toHTML() ?>
    <?php endforeach ?>

    <?php endif ?>

</div>



<?php require 'footer.php'?>