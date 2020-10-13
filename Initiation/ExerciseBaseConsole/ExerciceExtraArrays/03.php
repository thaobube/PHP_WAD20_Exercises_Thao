<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//3)	Affichez à nouveau l'array. Cette fois, les prix en dessous de 900 seront considérés comme "promo" et doivent être affichés en rouge

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

echo "<h4>3. Affichez le contenu de l'array avec une boucle for: </h4>";
for ($i = 0; $i < count($prix); $i++) {
    if ($prix[$i] < 900) {
        echo '<div style="color: red;">' . $prix[$i] . " euros" . '<br>' . '</div>';
    } else {
        echo $prix[$i] . " euros" . "<br>";
    }
}
