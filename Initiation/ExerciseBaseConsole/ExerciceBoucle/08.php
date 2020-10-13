<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//8.	Créez un logiciel qui calcule la multiplication d’une suite de valeurs saisis par l’utilisateur. L’entrée de données doit s’arrêter quand l’utilisateur saisit la valeur -1.


// $mul = 1;
// $valeur = 1;
// while ($valeur != -1) {
//     echo "Entrez une suite de valeurs que vous souhaitez saisir (arrêter par la valeur -1): ";
//     $valeur = read();
//     if ($valeur != -1) {
//         $mul *= $valeur;
//     }
// }
// echo "La multiplication d’une suite de valeurs saisies par vous est: " . $mul;

$mul = 1;
$valeur = 1;
while ($valeur != -1) {
    $mul *= $valeur;
    echo "Entrez une suite de valeurs que vous souhaitez saisir (arrêter par la valeur -1): ";
    $valeur = read();
}
echo "La multiplication d’une suite de valeurs saisies par vous est: " . $mul;
