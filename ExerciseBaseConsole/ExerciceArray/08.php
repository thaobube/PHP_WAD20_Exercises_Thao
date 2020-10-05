<?php

//8)	Créez un tableau contenant les notes de 5 élèves et une boucle qui affiche son contenu. Les notes inférieures à 10 seront affichées en rouge. En plus, la boucle calcule et affiche la moyenne des notes. Faites-le avec for et while.

$grades = array(18, 8, 20, 10, 3);
foreach ($grades as $key => $value) {

    if ($value < 10) {
        echo '<div style="color: red;">' . $key . ' - ' . $value . '<br>' . '</div>';
    } else {
        echo  $key . ' - ' . $value . '<br>';
    }
}
$totalGrades = 0;
for ($i = 0; $i < count($grades); $i++) {
    $totalGrades += $grades[$i];
}

// $totalGrades = 0;
// $i = 0;
// while ($i < count($grades)) {
//     $totalGrades += $grades[$i];
//     $i++;
// }

$moyenne = $totalGrades / count($grades);
echo "La moyenne est " . $moyenne;
