<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//3.	Modifiez l’exercice 1) pour que l’utilisateur puisse se tromper 3 fois
// 1.	Faites un logiciel qui demande l’âge à l’utilisateur. Le logiciel continue à demander jusqu’à ce qu’il introduise une valeur entre 0 et 130. 
// Si l’utilisateur est une personne majeure on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»


$compte = 0;
do {
    echo "Quel age avez vous: ";
    $age = read();
    $compte++;
} while (($age < 0 || $age > 130) && ($compte <= 2));

// $age = 150;
// while (($age < 0 || $age > 130) && ($compte < 3)) {
//     echo "Quel age avez vous: ";
//     $age = read();
//     $compte++;
// }
if ($compte = 3 && ($age < 0 || $age > 130)) {
    echo "Vous pouvez vous tromper au maximum 3 fois";
}

if ($age >= 18 && $age <= 130) {
    echo "Bienvenue!";
} elseif ($age >= 0 && $age < 18) {
    echo "Vous êtes encore très jeune";
}
