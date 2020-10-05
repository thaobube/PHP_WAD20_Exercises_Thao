<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//8.	Créez une fonction afficheTableau qui reçoit un array et affiche son contenu. Utilisez foreach pour vous faciliter la tâche. Testez-la avec l'array $vals 

$vals = [20, 50, 7, 54];
$vals[] = 150;
$vals[] = 300;
//var_dump($vals);

function afficheTableau($tab)
{
    foreach ($tab as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

afficheTableau($vals);
