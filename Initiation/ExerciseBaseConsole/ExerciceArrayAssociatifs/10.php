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
    <h2>Affichez le contenu de l'array de sites web dans un tableau HTML</h2>
    <table>
        <?php
        //10)	Créer un array "pistesCD". Chaque élément de l'array contiendra un nom (ex: "Billie Jean") et une durée exprimée en secondes (250s.)

        // •	Affichez le contenu de l'array en utilisant une boucle

        // •	Créez une nouvelle version qui affiche la durée en minutes et secondes 

        // Ex: Billie Jean: 4m. 10s.
        // Vous pouvez garder les mêmes variables et ses valeurs dans l'array.
        // Pour éliminer les décimales, vous pouvez utiliser la fonction "floor" de PHP

        // •	Créez un array "album" contenant le genre de l'album, l'interprète principal, le prix et l'ensemble de pistes 

        // •	Pour finir, affichez toutes les infos de l'album dans un tableau HTML


        $pistesCD = [
            "Billie Jean" => 250,
            "Mariah Carey" => 265,
            "Whitney Houston" => 415
        ];

        echo "<h4>Affichez le contenu de l'array qui affiche la durée en secondes: <br></h4>";
        foreach ($pistesCD as $key => $value) {
            echo $key . " : " . $value . "s. <br>";
        }

        echo "<h4>Affichez le contenu de l'array qui affiche la durée en minutes et secondes: <br></h4>";
        foreach ($pistesCD as $key => $value) {
            echo $key . " : " . floor($value / 60) . "m " . ($value % 60) . "s. <br>";
        }

        $album = [
            "Genre" => "Pop",
            "Interprète Principal" => "Whitney Houston",
            "Prix" => 20,
            "Pistes" => $pistesCD
        ];
        echo "<h3>Affichez toutes les infos de l'album dans un tableau HTML: <br></h3>";

        echo '<tr>';
        foreach ($album as $key => $value) {
            echo '<th>' . $key . '&nbsp&nbsp&nbsp&nbsp</th>';
        }
        echo '</tr>';

        echo '<tr>';
        foreach ($album as $item) {
            if (!is_array($item)) {
                echo '<td>' . $item . '</td>';
            } else {
                echo '<td>';
                foreach ($item as $key => $value) {
                    echo $key . " : " . $value . "s. <br>";
                }
                echo '</td>';
            }
        }
        echo '</tr>';


        ?>
    </table>
</body>

</html>