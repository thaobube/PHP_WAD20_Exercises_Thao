<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire14</title>
</head>
<!-- 14.	Créez un formulaire où on saisit un prix. Le formulaire doit avoir aussi une caisse à cocher "Réduction" qui permet d'appliquer une réduction d'un 10% au prix-->


<body>
    <form action="14Trait.php" method="POST">
        Saisir un prix <input type="text" , name="prix"> <br>
        Appliquer une Réduction:
        <br>
        <input type="checkbox" name="checkreduction" value="Reduction">Réduction

        <!-- <label for="checkreduction"> Réduction</label><br> -->
        <br>
        <input type="Submit" value="Calculer le Prix">
    </form>

</body>

</html>