<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//9.	Créez une boucle qui écrit la table de multiplication d'un nombre (stocké dans une variable), présentée comme suit 
// Table du 7:

// 7 x 1 = 7
// 7 x 2 = 14
// 7 x 3 = 21
// …
// 7 x 10 = 70

echo "Entrez un nombre : ";
$nombre = read();

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " x " . $i . " = " . ($nombre * $i) . "\n";
}

function read()
{
    fr = fopen('php://stdin', 'r');
    input = fgets(fr, 128);
    input = rtrim(input);
    fclose(fr);
    return input;
}
