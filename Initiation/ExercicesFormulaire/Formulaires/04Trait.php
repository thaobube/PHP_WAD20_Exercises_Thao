<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire04</title>
</head>
<!-- 4.	Créez un script contenant un formulaire où on saisit deux valeurs entières. Un autre script traitera les données envoyées et affichera toutes les valeurs entières qui existent entre les deux dans un tableau HTML -->
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <?php
    $chiffre1 = $_POST['chiffre1'];
    $chiffre2 = $_POST['chiffre2'];
    if (($chiffre1 == $chiffre2) || ($chiffre1 == $chiffre2 + 1) || ($chiffre1 == $chiffre2 - 1)) {
        echo "Il n'y a pas de valeur entières qui existent entre les deux valeurs";
    } else {
        echo '<table><tr><th>Toutes les valeurs entières qui existent entre les deux valeurs</th></tr>';
        if ($chiffre1 < $chiffre2) {
            for ($i = $chiffre1 + 1; $i < $chiffre2; $i++) {
                echo '<tr><td>' . $i . '</td></tr>';
            }
        }
        if ($chiffre1 > $chiffre2) {
            for ($i = $chiffre2 + 1; $i < $chiffre1; $i++) {
                echo '<tr><td>' . $i . '</td></tr>';
            }
        }
        echo '</table> ';
    }

    ?>
</body>

</html>