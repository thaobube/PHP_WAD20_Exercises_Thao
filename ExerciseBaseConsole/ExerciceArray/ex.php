<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Explication des arrays</h4>
    <?php
    $tab1 = []; //tableau vide
    var_dump($tab1); //afficher le contenu d'une variable
    $tab2 = ["Alessia", "Zuli", "Joanna"];
    var_dump($tab2);

    echo "<br>" . $tab2[1];
    $tab2[2] = "Manon";

    unset($tab2[1]);
    var_dump($tab2);
    echo "<br>" . $tab2[0];


    ?>
</body>

</html>