<?php

//2)	Rajoutez les valeurs 8 et 70 au tableau précédant. Affichez les éléments 2éme et 5éme du tableau.

$myArray = array(10, 20, 50);
var_dump($myArray);
$myArray[] = 8;
$myArray[] = 70;
var_dump($myArray);
echo $myArray[1] . "<br>";
echo $myArray[4];
