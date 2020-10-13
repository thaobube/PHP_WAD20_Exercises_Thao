<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
// $produit1 = ['oranges' => 2.5];
// $produit2 = ['pommes' => 3.5];
// $produit3 = ['poires' => 1.5];
// $produits = [$produit1, $produit2, $produit3];


$produits = [
    'oranges' => 2.5,
    'pommes' => 3.5,
    'poires' => 1.5
];

$prixTotal = 0;
foreach ($produits as $key => $val) {
    echo PHP_EOL;
    echo $key . " : " . $val;
    echo PHP_EOL;
    echo "Tapez le nombre de oranges: ";
    $quantite = read();
    $prixTotal += $quantite * $val;
}
echo PHP_EOL;
echo "Le total est: " . $prixTotal;



// foreach ($produits as $n_quoi) {
//     echo PHP_EOL;
//     echo $n_quoi;
// }
