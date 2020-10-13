<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//3.	Créez une fonction anonyme qui reçoit un array de strings et affiche chaque string en majuscules (utilisez mb_strtoupper à l'intérieur de votre fonction). Stockez le dans une variable. Testez-la.

$myArray = [
    "Billie Jean",
    "Mariah Carey",
    "Whitney Houston"
];
$majuscules = function ($tab) {
    for ($i = 0; $i < count($tab); $i++) {
        $tab[$i] = mb_strtoupper($tab[$i]);
        echo "<br>" . $tab[$i];
    }
};
$majuscules($myArray);
