<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//12)	Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d’effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.

//1
$myArray = array();

echo "Entrez 5 chiffres comme vous voulez? \n";
echo "Chiffre 1: ";
$myArray[0] = read();
$max = $myArray[0];
for ($i = 1; $i < 5; $i++) {
    echo "Chiffre " . ($i + 1) . ": ";
    $myArray[$i] = read();
    if ($max < $myArray[$i]) {
        $max = $myArray[$i];
    }
}
echo "La plus grande valeur: " . $max;

//2
$myArray = array();
echo "Entrez 5 chiffres comme vous voulez? \n";
for ($i = 0; $i < 5; $i++) {
    echo "Chiffre " . ($i + 1) . ": ";
    $myArray[$i] = read();
}
$max = $myArray[0];
if ($max < $myArray[$i]) {
    $max = $myArray[$i];
}
for ($i = 1; $i < 5; $i++) {
    if ($max < $myArray[$i]) {
        $max = $myArray[$i];
    }
}
echo "La plus grande valeur: " . $max;
