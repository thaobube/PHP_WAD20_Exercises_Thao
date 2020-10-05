<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//1.	Créez une fonction anonyme qui affiche "bonjour" sur l'écran. Stockez-la dans une variable. Testez-la.

$bonjour = function () {
    echo "<br>Bonjour!";
};
$bonjour();
