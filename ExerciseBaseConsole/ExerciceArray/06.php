<?php

//6)	Créez un tableau qui contient les valeurs du 1 à 20. Affichez son contenu (boucles)

$myArray = array();

for ($i = 0; $i < 20; $i++) {
    $myArray[$i] = $i + 1;
}

var_dump($myArray);
