<?php 
session_start();
$title = "Contact"; include 'header.php';?>
<?php include_once 'functions.php';?>
<?php include_once 'config.php';
// Récupérer l'heure d'aujourd'hui $heure
// Récupérer les creaneaux d'aujourd'hui $creneaux
// Récupérer l'état d'ouverure du magasin $ouvert
date_default_timezone_set('Europe/Paris');
$heure = (int)date('G');
$creneaux = CRENEAUX[date('N') - 1]; // On récupère les créneaux du jour en cours (date('N') - 1) car les jours commencent à 1 et les tableaux à 0
$ouvert = in_creneaux($heure, $creneaux); // On récupère l'état d'ouverture du magasin
?>


<div>
    <h2>Debug</h2>
    <pre>
        <?php var_dump($_SESSION); ?>
    </pre>
    <h2>Page contact</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aut consequuntur voluptates autem neque dolor.</p>
</div>
<div>
    <h3>Horaires d'ouverture</h3>

    <form action="" method="GET">
        <div>
            <select name="jour" id="">
                <?php foreach(JOURS as $key => $jour): ?>
                <option value="<?php $key; ?>"><?php echo $jour; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <input type="number" name="heure" value="<?php echo $heure ?>">
        </div>
        <button type="submit">Voir si le magasin est ouvert</button>
    </form>


    <?php if ($ouvert): ?>
        <div>
            Le magasin est ouvert
        </div>
    <?php else: ?>
        <div>
            Le magasin est fermé
        </div>
    <?php endif; ?>
<div>
    <ul>
        <?php foreach(JOURS as $key => $jour): ?> <!--  On parcourt le tableau JOURS -->
            <li <?php if($key+1 === (int)date('N')): ?> style="color:green" <?php endif ?>> 
                <strong><?php echo $jour; ?></strong> :
                <?php echo creneaux_html(CRENEAUX[$key]);?>
            </li> <!-- On affiche les créneaux pour chaque jour -->
        <?php endforeach; ?>
    </ul>
</div>
</div>

<?php include 'footer.php';?>