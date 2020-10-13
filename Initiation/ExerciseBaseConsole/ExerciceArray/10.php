<?php

//10)	Toujours à partir de deux tableaux existants, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf, il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. Par exemple si l'on a:

$array1 = array(3, 6);
$array2 = array(4, 8, 7, 12);
$schtroumpf = 0;
for ($i = 0; $i < count($array1); $i++) {
    for ($j = 0; $j < count($array2); $j++) {
        $schtroumpf += $array1[$i] * $array2[$j];
    }
}

echo $schtroumpf;
