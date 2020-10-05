<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//6.	Créez une fonction anonyme qui renvoie la somme des éléments d'un array envoyé en paramètre


$sommeArray = function ($tab) {
    $somme = 0;
    foreach ($tab as $key => $value) {
        $somme += $value;
    }
    return $somme;
};

$tab1 = [2, 3, 5, 8, 10];
$sum = $sommeArray($tab1);
echo $sum;
