<?php

//4.	Faites une boucle while et une boucle for pour afficher les valeurs entre 50 et 70 

echo  "Avec 'while': \n";
$nombre = 50;
while ($nombre <= 70) {
    echo $nombre;
    echo PHP_EOL;
    $nombre++;
}

echo  "Avec 'for': \n";
for ($i = 50; $i <= 70; $i++) {
    echo $i . "\n";
}
