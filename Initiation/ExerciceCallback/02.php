<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//2.	Créez une fonction anonyme qui affiche la somme de deux éléments envoyées en paramètre. Stockez le dans une variable. Testez-la.

$somme = function ($a, $b) {
    echo "<br>Somme: " . ($a + $b);
};
$somme(2, 6);
