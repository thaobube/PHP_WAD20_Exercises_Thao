<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//2.	Demandez à l’utilisateur la température de la salle où il se trouve. Si elle vaut entre 15 et 25 affichez "Il fait bon". Si la valeur est inférieure, affichez "Ça caille !! Montez la température !" et si la valeur est supérieure affiche "Trop chaud ! Descendez la température !"

echo "Pouvez-vous me donner la température de la salle: ";
$tem = read();
if ($tem >= 15 and $tem <= 25) {
    echo "Il fait bon";
}
if ($tem < 15) {
    echo "Ça caille !! Montez la température";
}
if ($tem > 25) {
    echo "Trop chaud ! Descendez la température !";
}
