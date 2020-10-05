<?php

//Exercices à faire : Exercices boucles, arrays, fonctions
// 1 4 5 8 11 12 13 14 15 16 21 31 33c (pas a et b)

//21.	Le code suivant nous posera de problèmes. Pourquoi? Arrangez-le

// $tab= array(4,5,1,7);
// for ($i=0;$i<10;$i++){
// 	echo $tab[i];
// }


//=>Problem: $tab[i] => $tab[$i]; count($tab) = 4 mais la boucle 'for' $i < 10 => il y a pas des valeur pour $tab[$i] avec $i>=4
$tab = array(4, 5, 1, 7);
for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i];
}
