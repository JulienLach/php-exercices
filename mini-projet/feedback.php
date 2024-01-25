<?php include 'inc/header.php' ?>  <!--include pour appeler une page dans un sous dossier -->
        
<?php

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($connexion, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


  <h2>Feedback</h2>

  <?php if(empty($feedback)): ?>
    <p class="lead">There is no feedback</p>
  <?php endif; ?>

  <?php foreach($feedback as $item): ?>
        <div style="margin: 15px 0">
          <div style="border: 1px solid #dee2e6; border-radius: 0.25rem">
            <div style="padding: 10px">

            <?php echo $item['body']; ?>

            <div>
              By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
            </div>

            </div>
          </div>
        </div>
        <?php endforeach; ?>
    </main>
    <?php include 'inc/footer.php' ?>

