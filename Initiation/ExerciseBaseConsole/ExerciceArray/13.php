<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//13)	Créez un array contenant 10 prix. Appliquez une TVA de 12% à chaque élément du tableau

//1
$myclothes = [
    "robe" => 20,
    "jacket" => 30,
    "chaussure" => 25,
    "chaussette" => 5,
    "chapeau" => 10,
    "croptop" => 10,
    "maillot" => 8,
    "pan" => 20,
    "jupe" => 12,
    "echarpe" => 13,
    "manteau" => 50
];
var_dump($myclothes);

foreach ($myclothes as $key => &$value) {
    $value = $value * 1.12;
}
var_dump($myclothes);
