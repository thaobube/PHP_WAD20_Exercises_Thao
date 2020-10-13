<?php

//4)	Rajoutez deux villes et leur capital après la déclaration mais avant la boucle d'affichage

$mylist = [
    "Belgique" => "Bruxelles",
    "France" => "Paris",
    "Vietnam" => "Hanoi"
];
$mylist["Espagne"] = "Madrid";
$mylist["Allemagne"] = "Berlin";

foreach ($mylist as $key => $value) {
    echo "La capital de " . $key . " est " . $value . "<br>";
}
