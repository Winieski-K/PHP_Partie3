<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    for ($i = 1; $i <= 100; $i += 15) {
      ?>
      <br />
      <?php
      echo 'On tient le bon bout';
    }
    ?>
  </p>
</body>
</html>
