<?php

//9)	Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur existants. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

$array1 = array(4, 8, 7, 9, 1, 5, 4, 6);
$array2 = array(7, 6, 5, 2, 1, 3, 7, 4);

$newArray = array();

for ($i = 0; $i < count($array1); $i++) {
    $newArray[$i] = $array1[$i] + $array2[$i];
}

var_dump($newArray);
