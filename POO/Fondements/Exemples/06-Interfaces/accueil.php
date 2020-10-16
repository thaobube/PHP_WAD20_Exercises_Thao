<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Avion.class.php";
    require_once "./Voiture.class.php";
    require_once "./Hydravion.class.php";

    $v1 = new Voiture("Mazda", 1500);
    $h1 = new Hydravion("Co co", 8000);
    $a1 = new Avion("Boeing 757", 20000);
    $v1->rouler();
    $h1->voler();
    $h1->navigueur();
    $a1->voler();
    ?>
</body>

</html>