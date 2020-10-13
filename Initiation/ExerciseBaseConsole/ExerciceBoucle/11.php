<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //11.	(Exercice à faire en Web) Modifiez la boucle précédant pour qu'elle affiche les heures paires en bleu et les heures impaires en rouge

    for ($i = 1; $i <= 24; $i++) {
        if ($i % 2 == 0) {
            echo '<div style="color: blue;">' . $i . ' h ' . '<br>' . '</div>';
        } else {
            echo '<div style="color: red;">' . $i . ' h ' . '<br>' . '</div>';
        }
        for ($j = 5; $j <= 60; $j += 5) {
            echo "&nbsp&nbsp&nbsp&nbsp" . $j . " min " . "<br>";
            for ($k = 10; $k <= 60; $k += 10) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .  $k . " sec " . "<br>";
            }
        }
    }
    ?>
</body>

</html>