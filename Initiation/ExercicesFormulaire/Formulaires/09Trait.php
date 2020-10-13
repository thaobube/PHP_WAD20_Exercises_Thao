<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire09</title>
</head>
<!-- 9.	Pour une application web de réservations de chambres dans un hôtel nous avons besoin d'un formulaire permettant de choisir le nombre de chambres de chaque type (simples, doubles, suites) souhaitées. Une fois les données sont envoyées, on calcule le prix total de la réservation.  -->


<body>

    <?php
    $nombreSimple = empty($_POST['nombreSimple']) ? 0 : $_POST['nombreSimple'];
    $nombreDouble = empty($_POST['nombreDouble']) ? 0 : $_POST['nombreDouble'];
    $nombreSuite = empty($_POST['nombreSuite']) ? 0 : $_POST['nombreSuite'];


    $nombreChambre = [$nombreSimple, $nombreDouble, $nombreSuite];
    // var_dump($nombreChambre);
    $arrayPrix = [100, 150, 200];
    // var_dump($arrayPrix);

    $arrayNombrePrix = array_combine($arrayPrix, $nombreChambre);
    // var_dump($arrayNombrePrix);

    $prixTotal = 0;
    foreach ($arrayNombrePrix as $key => $value) {
        $prixTotal += $key * $value;
    }

    echo "Le prix total de la réservation est " . $prixTotal . "euros."

    ?>
</body>

</html>