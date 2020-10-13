<?php

//2)	Remplacez le réalisateur du premier film par "Ed Wood"

$mylist = [
    "Parasite" => "Bong Joon Ho",
    "Joker" => "Todd Phillips",
    "1917" => "Sam Mendes"
];

$mylist["Parasite"] = "Ed Wood";

foreach ($mylist as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
