<?php

//5)	Modifiez la boucle pour qu'elle affiche uniquement les pays. Modifiez la boucle pour qu'elle affiche uniquement les villes. Revenez à la boucle originale.

$mylist = [
    "Belgique" => "Bruxelles",
    "France" => "Paris",
    "Vietnam" => "Hanoi"
];
$mylist["Espagne"] = "Madrid";
$mylist["Allemagne"] = "Berlin";

echo "Les pays sont: <br> ";
foreach ($mylist as $key => $value) {
    echo $key . "<br>";
}
echo "Les villes sont: <br> ";
foreach ($mylist as $key => $value) {
    echo $value . "<br>";
}
echo "La boucle originale: <br> ";
foreach ($mylist as $key => $value) {
    echo "La capital de " . $key . " est " . $value . "<br>";
}
