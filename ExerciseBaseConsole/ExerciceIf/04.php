<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//4.	Pour qu'un élève puisse réussir une matière il doit assister à un minimum de cours :

// 1.	80% des cours s'il est en 1ere année
// 2.	70% des cours s'il est en 2eme année
// 3.	60% des cours s'il est en 3eme année
// Créez une variable contenant le nombre total de cours de cette matière. Demandez à l’utilisateur le nombre d'absences de l'élève et affichez s'il a réussi (ou pas) son année

echo "Pouvez-vous entrez votre année (1 ou 2 ou 3): ";
$nombreAnnee = read();

echo "Pouvez-vous entrez le nombre total de cours de cette matière: ";
$nombreTotal = read();

echo "Pouvez-vous entrez le nombre d'absences de cette matière: ";
$nombreAbsences = read();
$percentagePresent = (1 - ($nombreAbsences / $nombreTotal)) * 100;

if (($nombreAnnee == 1 && $percentagePresent >= 80) || ($nombreAnnee == 2 && $percentagePresent >= 70) || ($nombreAnnee == 3 && $percentagePresent >= 60)) {
    echo "Vous pouvez passer cette matière!";
} else {
    echo "Désolé. Vous ne pouvez pas passer cette matière!";
}
