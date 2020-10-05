<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire16</title>
</head>
<!--16.	Créez un générateur de langue de bois (petit et simple) similaire à http://www.encyclopedie-incomplete.com/?Le-Pipotron-Generateur-Automatique

Si vous voulez un défi plus grand, essayez d'implémenter l'Enrhubatron!
 -->
<?php
$part1 = [
    "Considérant",
    "Où que nous mène",
    "Eu égard à",
    "Vu",
    "En ce qui concerne"
];

$part2 = [
    "la restriction",
    "l'orientation",
    "la crise",
    "l'inertie",
    "la difficulté"
];

$part3 = [
    "présente",
    "actuelle",
    "générale",
    "induite",
    "conjoncturelle"
];

$part4 = [
    "il faut",
    "il faut de toute urgence",
    "je recommande de",
    "il est très important de",
    "je vous demande de"
];

$part5 = [
    "favoriser",
    "prendre en considération",
    "remodeler",
    "gérer",
    "comprendre"
];

$part6 = [
    "toutes les",
    "chacune des",
    "la majorité des",
    "les relations des",
    "certaines"
];

$part7 = [
    "solutions",
    "issues",
    "améliorations",
    "actions",
    "stratégies"
];

$part8 = [
    "possibles",
    "de bon sens",
    "que nous connaissons",
    "évidentes",
    "optimales"
];

$part9 = [
    "pour longtemps",
    "à l'avenir",
    "depuis longtemps",
    "même si ce n'est pas facile",
    "si l'on veut s'en sortir un jour"
];
$optionParts = [$part1, $part2, $part3, $part4, $part5, $part6, $part7, $part8, $part9];
?>


<body>
    <form action="16Trait.php" method="POST">
        <?php
        for ($i = 0; $i < 9; $i++) {
            echo '<select name="optionPart' . ($i + 1) . '">';
            foreach ($optionParts[$i] as $value) {
                echo '<option>' . $value . '</option>';
            }
            echo '</select>';
        }
        ?>
        <br>
        <br>
        <input type="Submit" value="Composez votre pipo">
        <br>
    </form>

</body>

</html>