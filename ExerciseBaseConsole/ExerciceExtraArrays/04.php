<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//4)	Suite à une promotion, tous les prix ont descendu soudainement à la moitie. Mettez à jour le tableau pour qu'il montre ce changement

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

echo "<h4>4. Suite à une promotion, tous les prix ont descendu soudainement à la moitie: </h4>";

$promotionPrix = [];
for ($i = 0; $i < count($prix); $i++) {
    $promotionPrix[] = $prix[$i] / 2;
}
for ($i = 0; $i < count($promotionPrix); $i++) {
    echo $promotionPrix[$i] . " euros" . "<br>";
}
