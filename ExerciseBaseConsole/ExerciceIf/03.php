<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//3.	Demandez deux chiffres à l’utilisateur et une opération à réaliser avec ces deux chiffres (addition, multiplication, soustraction et division). Affichez le calcul correspondant.

echo "Pouvez-vous entrer 2 chiffes!";
echo PHP_EOL;
echo "Chiffe 1 = ";
$chiffe1 = read();
echo "Chiffe 2 = ";
$chiffe2 = read();
echo "Pouvez-vous choisir une opération à réaliser avec ces deux chiffres:\n1. L'addition \n2. La multiplication \n3. La soustraction \n4. La division";
echo PHP_EOL;
$choix = read();
if ($choix == 1) {
    echo "L'addition de 2 chiffes est: " . ($chiffe1 + $chiffe2);
}
if ($choix == 2) {
    echo "La multiplication de 2 chiffes est: " . ($chiffe1 * $chiffe2);
}
if ($choix == 3) {
    echo "La soustraction  de 2 chiffes est: " . ($chiffe1 - $chiffe2);
}
if ($choix == 4) {
    echo "La division de 2 chiffes est: " . ($chiffe1 / $chiffe2);
}
