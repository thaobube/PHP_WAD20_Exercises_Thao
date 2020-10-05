<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

//1.	Créez un code capable de calculer la surface d’une chambre. Demandez à l’utilisateur la largeur et la longueur. Si les valeurs sont pareilles, affichez le message "La chambre est carrée!"

echo "Pouvez vous donner la largeur de votre chambre: ";
$largeur = read();
echo "Pouvez vous donner la longueur de votre chambre: ";
$longueur = read();
$surface = $largeur * $longueur;
echo "La surface de votre chambre est: " . $surface;
echo PHP_EOL;
if ($largeur == $longueur) {
    echo "La chambre est carrée!";
}
