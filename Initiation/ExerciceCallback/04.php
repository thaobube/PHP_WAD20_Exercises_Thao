<?php
//Exercices callbacks et fonctions anonymes (variables et paramètres)
//4.	Créez une fonction anonyme qui reçoit deux arrays et crée un array associatif où les clés sont les éléments du premier array et les valeurs sont les éléments du deuxième.
// Si les tableaux n'ont pas la même taille la fonction renvoie null. Exemple :

// $tabCles = ['nom', 'prénom', 'profession', 'hobby'];
// $tabVals = ['Groening', 'Matt', 'scénariste', 'dessiner'];
// $tabAssoc = $creerAssoc($tabCles, $tabVals);

// Doit créer :
// array (size=4)
// 'nom' => string 'Groening' (length=8)
// 'prénom' => string 'Matt' (length=4)
// 'profession' => string 'scénariste' (length=11)
// 'hobby' => string 'dessiner' (length=8)


$tab1 = ['nom', 'prénom', 'profession', 'hobby'];
$tab2 = ['Groening', 'Matt', 'scénariste', 'dessiner'];

$creerAssoc = function ($tabCles, $tabVals) {
    if (count($tabCles) == count($tabVals)) {
        $tabAssoc = [];
        for ($i = 0; $i < count($tabCles); $i++) {
            $tabAssoc[$tabCles[$i]] =  $tabVals[$i];
        }
        return $tabAssoc;
    } else {
        return null;
    }
};

$newTab = $creerAssoc($tab1, $tab2);

var_dump($newTab);

//On peut aussi utiliser la function array_combine ( array $keys , array $values ) 
