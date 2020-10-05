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
        //9)	Créez un array contenant de noms de sites web (ex: Startpage, Wikipedia), leur lien d'internet (ex: www.startpage.com) et une description de chacun (ex: moteur de recherche).
        // Une fois crée, rajoutez encore deux sites.

        // Affichez le contenu de l'array dans un tableau HTML en utilisant une boucle

        $web1 = [
            "Nom" => "Startpage",
            "Lien" => "www.startpage.com",
            "Description" => "Moteur de recherche"
        ];
        $web2 = [
            "Nom" => "Wikipedia",
            "Lien" => "www.wikipedia.org",
            "Description" => "C'est une encyclopédie"
        ];
        $web3 = [
            "Nom" => "Google",
            "Lien" => "www.google.com",
            "Description" => "Moteur de recherche"
        ];


        $sitesweb = [$web1, $web2, $web3];
        echo '<tr>';
        foreach ($web1 as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';

        for ($i = 0; $i < count($sitesweb); $i++) {
            echo '<tr>';
            foreach ($sitesweb[$i] as $key => $value) {
                echo '<td>' . $value . '&nbsp&nbsp&nbsp</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>