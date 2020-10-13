<?php

//3)	Créez un tableau contenant les noms de 5 villes. Affichez le contenu du tableau (faites une version sans boucles et une avec une boucle)

$villes = array("Gand", "Bruxelles", "Liege", "Louvain", "Mons");
var_dump($villes);

foreach ($villes as $key => $value) {
    echo  $key . " : " . $value . "<br>";
}
