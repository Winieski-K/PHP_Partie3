<?php
$number1 = 0;
$number2 = rand(1,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <p>
    <?php
    while($number1 <= 20) {
      $result = $number1 * $number2;
      ?>
      <br />
      <?php
      echo $result;
      $number1++;
    }
    ?>
  </p>
</body>
</html>
