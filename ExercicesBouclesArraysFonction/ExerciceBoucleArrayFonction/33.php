<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//33.	Créez les fonctions suivantes
// c.	afficherCase qui reçoit deux parametres:
// 1.	un array indexé (pas associatif) et affiche ses valeurs
// 2.	un string  $case contenant le mot "majuscules" ou "minuscules"
// La fonction afficherCase doit afficher les valeurs de l'array en majuscules ou minuscules selon la valeur du paramètre $case. Pour ce faire, regardez la documentation des fonctions strtoupper et strtolower


$tab = ["Mango", "framboise", "KIWI", "pomme", "banane", "ORANGE"];


function afficherCase($arrayIndexe, $case)
{
    if (ctype_lower($case)) {
        for ($i = 0; $i < count($arrayIndexe); $i++) {
            $arrayIndexe[$i] = strtolower($arrayIndexe[$i]);
            echo $arrayIndexe[$i] . "<br> ";
        }
    } elseif (ctype_upper($case)) {
        for ($i = 0; $i < count($arrayIndexe); $i++) {
            $arrayIndexe[$i] = strtoupper($arrayIndexe[$i]);
            echo $arrayIndexe[$i] . "<br> ";
        }
    } else {
        echo 'Le deuxieme parametre doit contenir le mot "majuscules" ou "minuscules"';
    }
}

afficherCase($tab, "banane");
afficherCase($tab, "KIWI");
afficherCase($tab, "Mango");
