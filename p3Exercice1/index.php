<?php
$counter = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <p>
            <?php
            while ($counter < 10) {
                echo $counter;
                ?>
                <br />
                <?php
                $counter++;
            }
            ?>
        </p>
    </body>
</html>
