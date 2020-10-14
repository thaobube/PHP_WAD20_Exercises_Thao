<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Bus.class.php";
    require_once "./Moto.class.php";
    require_once "./Camion.class.php";

    $b1 = new Bus("W01-2345", 120, "diezel", "45");
    $c1 = new Camion("Z01-3251", 100, "essence", "2000");
    $m1 = new Moto("Z02-9370", 150, "essence", "noir", "Suzuki");

    echo "<br>" . $b1->carburant;
    echo "<br>" . $c1->chargeMaximale . "<br>";

    echo "<br>" . $c1->decharger();
    echo "<br>" . $m1->accelerer();
    //echo "<br>" . $b1->ravitailler();//protectedS




    ?>
</body>

</html>