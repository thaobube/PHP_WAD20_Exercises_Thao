<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//6.	Faites une boucle qui, à partir d'une valeur de départ stockée dans une variable, affiche les dix nombres suivants. Par exemple, si la valeur stockée est 17, le programme affichera les nombres de 18 à 27. Faites deux versions de l'algorithme : while et for.

echo "Entrez un chiffe vous voulez: ";
$nombre = read();
$i = $nombre;
echo "Avec 'while': \n";
while ($i < ($nombre + 10)) {
    $i++;
    echo $i;
    echo PHP_EOL;
}


echo  "Avec 'for': \n";
for ($i = ($nombre + 1); $i <= ($nombre + 10); $i++) {
    echo $i . "\n";
}
