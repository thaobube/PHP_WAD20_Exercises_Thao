<?php

// 10.	Créer une boucle qui affiche les 24h d’une journée. Pour chaque heure il affiché toutes les 5 minutes et pour chacune de ces 5 min il affiche toutes les 10 secondes 
// Résultat souhaité :
// 1 h
// 5min
// 10sec
// 20sec
// 30sec
// …
// 10min
// 15min
// …
// 2h



for ($i = 1; $i <= 24; $i++) {
    echo $i . " h " . "\n";
    for ($j = 5; $j <= 60; $j += 5) {
        echo "\t" . $j . " min " . "\n";
        for ($k = 10; $k <= 60; $k += 10) {
            echo "\t" . "\t" .  $k . " sec " . "\n";
        }
    }
}
