<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//5)	Créez un nouveau tableau contenant les nouveaux prix affichés en dollars

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

$promotionPrix = [];
for ($i = 0; $i < count($prix); $i++) {
    $promotionPrix[] = $prix[$i] / 2;
}
// for ($i = 0; $i < count($promotionPrix); $i++) {
//     echo $promotionPrix[$i] . " euros". "<br>";
// }

echo "<h4>5. Les nouveaux prix affichés en dollars </h4>";
$tauxDeChange = 1.17; //1 Euro equals 1,17 United States Dollar 
$promotionPrixDollar = [];
for ($i = 0; $i < count($promotionPrix); $i++) {
    $promotionPrixDollar[$i] = $promotionPrix[$i] * $tauxDeChange;
}
for ($i = 0; $i < count($promotionPrixDollar); $i++) {
    echo $promotionPrixDollar[$i] . " dollars" . "<br>";
}
