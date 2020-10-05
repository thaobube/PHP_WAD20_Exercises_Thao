<?php

//3)	Créez un array associatif de pays et capitales et remplissez son contenu dans la déclaration. Créez une boucle foreach pour afficher son contenu dans la forme "La capital de xxxx est xxxx"

$mylist = [
    "Belgique" => "Bruxelles",
    "France" => "Paris",
    "Vietnam" => "Hanoi"
];

foreach ($mylist as $key => $value) {
    echo "La capital de " . $key . " est " . $value . "<br>";
}
