<?php

//7)	Créez trois arrays contenant le nom, date de naissance et le numéro de téléphone de 3 personnes. Créez un array "agenda" contenant ces trois arrays. Affichez le contenu complet de l'agenda.

$personne1 = [
    "nom" => "Thao",
    "date de naissance" => "28/12/1986",
    "numéro de téléphone" => "0483374334"
];
$personne2 = [
    "nom" => "Thang",
    "date de naissance" => "23/02/1987",
    "numéro de téléphone" => "0482222522"
];
$personne3 = [
    "nom" => "Chi",
    "date de naissance" => "12/11/1986",
    "numéro de téléphone" => "0400000000"
];

$agenda = [$personne1, $personne2, $personne3];

//Utilise la boucle for
for ($i = 0; $i < count($agenda); $i++) {
    foreach ($agenda[$i] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}
//Utilise la boucle foreach
foreach ($agenda as $value) {
    foreach ($value as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}
