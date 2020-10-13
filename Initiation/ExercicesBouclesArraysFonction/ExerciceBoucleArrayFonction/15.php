<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//15.	Appelez la fonction afficheAssoc  que vous avez créé pour voir le contenu de chaque film. On devrait voir la dateSortie en plus du nom, genre et réalisateur…


$film1 = [
    "Nom" => "Parasite",
    "Genre" => "Thriller",
    "Réalisateur" => "Bong Joon Ho"
];
$film2 = [
    "Nom" => "Joker",
    "Genre" =>  "Drame",
    "Description" => "Todd Phillips"
];
$film3 = [
    "Nom" => "1917",
    "Genre" => "Drame, Guerre",
    "Description" => "Sam Mendes"
];

$film1["dateSortie"] = "12/04/2019";
$film2["dateSortie"] = "17/10/2019";
$film3["dateSortie"] = "01/08/2019";

function afficheAssoc($tab)
{
    foreach ($tab as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

afficheAssoc($film1);
