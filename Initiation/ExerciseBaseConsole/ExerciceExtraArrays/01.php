<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//1)	Affichez le contenu de l'array avec une boucle foreach

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

echo "<h4>1. Affichez le contenu de l'array avec une boucle foreach: </h4>";
foreach ($prix as $value) {
    echo $value . " euros" . "<br>";
}
