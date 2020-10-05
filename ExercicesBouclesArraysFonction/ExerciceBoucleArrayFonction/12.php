<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//12.	Affichez le contenu d'un des films qu'on vient de créer en utilisant une boucle foreach


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

foreach ($film1 as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
