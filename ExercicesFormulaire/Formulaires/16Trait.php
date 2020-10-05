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


<body>
    <?php
    echo "Votre pipo est : <br>";
    $result = "";
    for ($i = 0; $i < 9; $i++) {
        $result .= $_POST['optionPart' . ($i + 1)] . " ";
    }
    echo $result;

    ?>
</body>

</html>