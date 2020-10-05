<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//5.	Créez une fonction anonyme qui reçoit une valeur et renvoie true si la valeur est paire et faux autrement


$estPaire = function ($val) {
    if ($val % 2 == 0) {
        return true;
    } else {
        return false;
    }
};

$a = $estPaire(5);
$b = $estPaire(4);
echo $a . "<br>";
echo $b . "<br>";
