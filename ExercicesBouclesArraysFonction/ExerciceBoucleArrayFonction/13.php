<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//13.	Créez une fonction afficheAssoc qui reçoit un array associatif et affiche son contenu en utilisant une boucle foreach. Testez la avec l'array que vous venez de créer


$film1 = [
    "Nom" => "Parasite",
    "Genre" => "Thriller",
    "Réalisateur" => "Bong Joon Ho"
];

function afficheAssoc($tab)
{
    foreach ($tab as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

afficheAssoc($film1);
