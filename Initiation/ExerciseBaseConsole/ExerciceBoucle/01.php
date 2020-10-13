<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//1. 	Faites un logiciel qui demande l’âge à l’utilisateur. Le logiciel continue à demander jusqu’à ce qu’il introduise une valeur entre 0 et 130. 
//Si l’utilisateur est une personne majeure on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»

do {
    echo "Quel age avez vous: ";
    $age = read();
} while ($age < 0 || $age > 130);

if ($age >= 18) {
    echo "Bienvenue!";
} else {
    echo "Vous êtes encore très jeune";
}
