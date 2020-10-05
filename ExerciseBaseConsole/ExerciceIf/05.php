<?php
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}
//5.	Nous voulons calculer le prix d'une commande dans un magasin d'informatique. Le prix total est sujet à des remises.
// •	Affichez une liste de trois produits et leur prix correspondant
// •	Demandez à l’utilisateur le nombre d’unités qu’il veut acheter de chaque produit
// •	Calculez le total de la commande sachant que :

// o	Si on commande plus de 5 unités d'un certain produit on a une remise du 10% sur le prix de ce produit
// o	Les produits peuvent être retirés au magasin ou livrés. La livraison coute 2% du prix total de la commande, mais elle est gratuite si notre commande dépasse 100 euros
// o	Une carte de fidélité accorde 20% de réduction sur le prix total de la commande (on n’a pas de réduction pour la livraison dans ce cas)

$produits = [
    'Robe' => 20,
    'Pan' => 15,
    'Chaussure' => 12
];
$total = 0;
echo "Liste de trois produits et leur prix correspondant: ";
echo PHP_EOL;
foreach ($produits as $key => $val) {
    echo ($key . " : " . $val);
    echo PHP_EOL;
}
foreach ($produits as $key => $val) {
    echo "Tapez le nombre de " . $key . " vous voulez: ";
    $quantite = read();
    if ($quantite >= 5) {
        $total += $val * $quantite * 0.9;
    } else {
        $total += $val * $quantite;
    }
}

echo "Le total vous devez payer est : " . $total;
echo PHP_EOL;
echo "Avez vous la carte de fidélité? \n1. Oui \n2. Non";
echo PHP_EOL;
$avoirCarte = read();
if ($avoirCarte == 1) {
    $total *= 0.8;
}

echo "Le total vous devez payer est : " . $total;
echo PHP_EOL;
echo "Souhaitez-vous venir chercher au magasin ou livrer? \n1. Venir chercher \n2. Livrer";
echo PHP_EOL;
$choixLivraison = read();

if ($choixLivraison == 2 && $total < 100) {
    $total +=  (($total * 2) / 100);
}

echo "Le total vous devez payer est : " . $total;
