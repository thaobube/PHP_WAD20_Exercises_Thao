<?php

//1)	Créez un array associatif contenant de couples film-réalisateur. Affichez le contenu sans utiliser de boucles et en utilisant de boucles

$mylist = [
    "Parasite" => "Bong Joon Ho",
    "Joker" => "Todd Phillips",
    "1917" => "Sam Mendes"
];

echo $mylist["Parasite"] . "<br>";
echo $mylist["Joker"] . "<br>";
echo $mylist["1917"] . "<br>";

foreach ($mylist as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
