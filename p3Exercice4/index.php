<?php
$counter = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    while($counter <= 10) {
      ?>
      <br />
      <?php
      echo $counter;
      $counter += $counter/2;
    }
    ?>
  </p>
</body>
</html>
