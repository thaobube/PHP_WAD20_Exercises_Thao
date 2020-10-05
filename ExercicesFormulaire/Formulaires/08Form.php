<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire08</title>
</head>
<!-- 8.	Créez un formulaire qui nous permette d'introduire un prix et de calculer le prix TVAC. La TVA est choisie par l'utilisateur parmi les valeurs d'une liste déroulante. Forcez (HTML) à l'utilisateur à saisir une valeur numérique.   -->

<body>


    <form action="08Trait.php" method="POST">
        Saisir un prix <input type="text" , name="prix"> <br>
        Choisir une TVA<select name="optionTVA">
            <option>6%</option>
            <option>12%</option>
            <option>21%</option>
        </select>
        <input type="Submit" value="Prix avec TVA">
    </form>
</body>

</html>