<?php

//6)	Affichez le contenu du array avec print_r pour mieux comprendre l'organisation des indices

$mylist = [
    "Belgique" => "Bruxelles",
    "France" => "Paris",
    "Vietnam" => "Hanoi"
];
$mylist["Espagne"] = "Madrid";
$mylist["Allemagne"] = "Berlin";

print_r($mylist);
