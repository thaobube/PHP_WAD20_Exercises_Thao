<?php
// du texte
echo "Bonjour!";
echo "<h5 id = 'monH5'>Je suis un h5</h5>";
// un div
echo "<div class='maclasse'>Je suis dans un div</div>";

echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo $i . " , ";
}


//print with ','
echo "<br>";
$nom = ['Jean', 'Lucie', 'Belén'];
foreach ($nom as $unNom) {
    echo $unNom . ' , ';
}

//print without ','
echo "<br>";
echo (implode(" , ", $nom));

//génération d'un select
echo "<br>";
echo "<select>";
$paysOrigine = ['Belgique', 'Italie', 'Pologne'];
foreach ($paysOrigine as $unPays) {;
    echo "<option>" . $unPays . "</option>";
};
echo "</select>";

echo "<br>";
echo "<script>console.log ('hello depuis un js dans php')</script>";
