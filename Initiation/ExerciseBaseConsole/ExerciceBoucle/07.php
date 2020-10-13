<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//7.	Créez un logiciel qui calcule la multiplication d’une suite de valeurs saisies par l’utilisateur. Le logiciel doit demander à l’utilisateur le nombre de valeurs qu’il souhaite saisir

echo "Entrez le nombre de valeurs que vous souhaitez saisir: ";
$nombre = read();
$mul = 1;
for ($i = 0; $i < $nombre; $i++) {
    echo "Entrez le valeur " . ($i + 1) . " : ";
    $valeur = read();
    $mul *= $valeur;
}
echo "La multiplication d’une suite de valeurs saisies par vous est: " . $mul;
