<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<br>";
    // $sum = $_GET['number1'] + $_GET['number2'];
    // $difference = $_GET['number1'] - $_GET['number2'];
    // $multiplication = $_GET['number1'] * $_GET['number2'];
    // $division = $_GET['number1'] / $_GET['number2'];
    echo "L’addition: " . $_GET['number1'] . " + " . $_GET['number2'] . " = " . ($_GET['number1'] + $_GET['number2']);
    echo "<br>";
    echo "La soustraction: " . $_GET['number1'] . " - " . $_GET['number2'] . " = " . ($_GET['number1'] - $_GET['number2']);
    echo "<br>";
    echo "La multiplication: " . $_GET['number1'] . " * " . $_GET['number2'] . " = " . ($_GET['number1'] * $_GET['number2']);
    echo "<br>";
    echo "La division: " . $_GET['number1'] . " / " . $_GET['number2'] . " = " . ($_GET['number1'] / $_GET['number2']);
    // echo "<br>";
    // echo "La soustraction: " . $difference;
    // echo "<br>";
    // echo "La multiplication: " . $multiplication;
    // echo "<br>";
    // echo "La division: " . $multiplication;

    ?>
</body>

</html>