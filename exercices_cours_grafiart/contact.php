<?php $title = "Contact"; include 'header.php';?>
<?php include_once 'functions.php';?>
<?php include_once 'config.php';?>
<?php $creneaux = creneaux_html(CRENEAUX);
// On appelle la fonction creneaux_html() en lui passant la constante CRENEAUX en paramètre ?> 


<div>
    <h2>Page contact</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aut consequuntur voluptates autem neque dolor.</p>
</div>
<div>
    <h3>Horaires d'ouverture</h3>
<?php 
    echo $creneaux;
?>
</div>

<?php include 'footer.php';?>



