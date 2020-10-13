<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//31.	Utilisez la fonction array_search avec deux paramètres pour afficher la position d'un certain élément dans l'array et "Element pas trouvé" dans le contraire

$tab1 = [2, 4, 5, 6, 10, 12];
// $tab2 = [
//     "Belgique" => "Bruxelles",
//     "France" => "Paris",
//     "Vietnam" => "Hanoi"
// ];

function array_serach($tab, $element)
{
    foreach ($tab as $key => $value) {
        if ($element == $value) {
            return $key;
        }
    }
}

$position1 = array_serach($tab1, 5);
echo "La position est " . $position1 . "<br>";

// $position2 = array_serach($tab2, "Paris");
// echo "La position est " . $position2 . "<br>";
