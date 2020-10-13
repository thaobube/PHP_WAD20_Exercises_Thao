<?php

//Créez l'array suivant contenant les prix de billets d'avion disponibles pour aller à Cuba à une certaine date (en euros):
//1000	800	 900  700 	800	 900  1800  1900	1400	1500

//2)	Affichez le contenu de l'array avec une boucle for

$prix = [1000, 800, 900, 700, 800, 900, 1800, 1900, 1400, 1500];

echo "<h4>2. Affichez le contenu de l'array avec une boucle for: </h4>";
for ($i = 0; $i < count($prix); $i++) {
    echo $prix[$i] . " euros" . "<br>";
}
