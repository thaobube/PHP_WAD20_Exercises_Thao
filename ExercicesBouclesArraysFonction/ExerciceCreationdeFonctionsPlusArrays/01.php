<?php
//1.	Développez une fonction crée un array de 25 entiers aléatoires (utilisez mt_rand) et l'affiche 

function randomArray($n)
{
    $tab = [];
    for ($i = 0; $i < $n; $i++) {
        $tab[] = mt_rand();
    }
    return $tab;
}

$newArray = randomArray(25);
var_dump($newArray);
