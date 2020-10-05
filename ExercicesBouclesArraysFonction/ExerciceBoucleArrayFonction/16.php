<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//16.	Effacez le réalisateur du $film1. Affichez le contenu du film1 pour vous assurer que le réalisateur n'est plus là


$film1 = [
    "Nom" => "Parasite",
    "Genre" => "Thriller",
    "Réalisateur" => "Bong Joon Ho"
];

$film1["dateSortie"] = "12/04/2019";

unset($film1["Réalisateur"]);

function afficheAssoc($tab)
{
    foreach ($tab as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

afficheAssoc($film1);
