<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//11)	Ecrivez un algorithme qui permette la saisie d’un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l’écran.

$myArray = array();
echo "Entrez 5 chiffres comme vous voulez? \n";
for ($i = 0; $i < 5; $i++) {
    echo "Chiffre " . ($i + 1) . ": ";
    $myArray[$i] = read() + 1;
}
var_dump($myArray);
