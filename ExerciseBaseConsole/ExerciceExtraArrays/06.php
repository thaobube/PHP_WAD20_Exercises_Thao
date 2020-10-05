<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//6)	Comptez le nombre de vols qui coutent moins de 700 euros

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

$promotionPrix = [];
for ($i = 0; $i < count($prix); $i++) {
    $promotionPrix[] = $prix[$i] / 2;
}
for ($i = 0; $i < count($promotionPrix); $i++) {
    echo $promotionPrix[$i] . " euros" . "<br>";
}

echo "<h4>6. Le nombre de vols qui coutent moins de 700 euros: </h4>";
$compteur = 0;
for ($i = 0; $i < count($promotionPrix); $i++) {
    if ($promotionPrix[$i] < 700) {
        $compteur++;
    }
}
echo $compteur;
