<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <h2>Affichez l'agenda dans un tableau HTML</h2>
    <table>
        <?php
        //8) À partir de l'exercice précédent

        // • Affichez l'agenda dans un tableau HTML, choisissez vous-même un format qui vous plaise
        // • Rajoutez à l'agenda le contact de votre meilleur ami
        $personne1 = [
            "Nom" => "Thao",
            "Date de naissance" => "28/12/1986",
            "Numéro de téléphone" => "0483374334"
        ];
        $personne2 = [
            "Nom" => "Thang",
            "Date de naissance" => "23/02/1987",
            "Numéro de téléphone" => "0482222522"
        ];
        $personne3 = [
            "Nom" => "Chi",
            "Date de naissance" => "12/11/1986",
            "Numéro de téléphone" => "0400000000"
        ];

        $agenda = [$personne1, $personne2, $personne3];
        // • Rajoutez à l'agenda le contact de votre meilleur ami
        $meilleurami = [
            "Nom" => "Marie",
            "Date de naissance" => "06/03/1982",
            "Numéro de téléphone" => "0442020202"
        ];
        $agenda[3] = $meilleurami;

        echo '<tr>';
        foreach ($personne1 as $key => $value) {
            echo '<th>' . $key . '&nbsp&nbsp&nbsp</th>';
        }
        echo '</tr>';

        for ($i = 0; $i < count($agenda); $i++) {
            echo '<tr>';
            foreach ($agenda[$i] as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>