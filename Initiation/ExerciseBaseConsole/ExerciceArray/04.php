<?php

//4)	Rajoutez deux villes au tableau précédant et affichez-le

$villes = array("Gand", "Bruxelles", "Liege", "Louvain", "Mons");

$villes[] = "Namur";
$villes[] = "Paris";
var_dump($villes);
foreach ($villes as $key => $value) {
    echo  $key . " : " . $value . "<br>";
}
