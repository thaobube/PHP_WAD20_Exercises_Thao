<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//2.	Modifiez la fonction précédente pour qu'elle puisse recevoir le nombre de valeurs qui contient l'array 

function recevoirArray($n)
{
  
