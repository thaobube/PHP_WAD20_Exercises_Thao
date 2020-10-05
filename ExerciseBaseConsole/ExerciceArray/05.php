<?php

//5)	Remplacez la première ville du tableau par 'Quito'

$villes = array("Gand", "Bruxelles", "Liege", "Louvain", "Mons");

$villes[] = "Namur";
$villes[] = "Paris";

$villes[0] = "Quito";

var_dump($villes);
