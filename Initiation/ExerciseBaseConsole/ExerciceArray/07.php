<?php

//7)	Créez une boucle qui multiplie par deux chaque valeur du tableau précédant

$myArray = array();
$myArray[0] = 1;
for ($i = 0; $i < 20; $i++) {
    $myArray[$i] = ($i + 1) * 2;
}

var_dump($myArray);
