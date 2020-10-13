<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire09</title>
</head>
<!-- 9.	Pour une application web de réservations de chambres dans un hôtel nous avons besoin d'un formulaire permettant de choisir le nombre de chambres de chaque type (simples, doubles, suites) souhaitées. Une fois les données sont envoyées, on calcule le prix total de la réservation.  -->

<body>

    <h2>Réservations de chambres!</h2>
    <form action="09Trait.php" method="POST">
        Type simples - Prix: 100 euro/jour. Choisir le nombre de chambres <input type="text" , name="nombreSimple"> <br>
        Type doubles - Prix: 150 euro/jour. Choisir le nombre de chambres <input type="text" , name="nombreDouble"> <br>
        Type suites - Prix: 200 euro/jour. Choisir le nombre de chambres <input type="text" , name="nombreSuite"> <br>

        <input type="Submit" value="Envoyer">
    </form>
</body>

</html>