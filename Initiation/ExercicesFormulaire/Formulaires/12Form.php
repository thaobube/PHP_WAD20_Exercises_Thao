<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire12</title>
</head>
<!-- 12.	Créez un formulaire où l’utilisateur peut saisir un prix. Le formulaire a aussi une liste déroulante contenant de possibilités de paiement et un bouton « Payer ». Quand l’utilisateur clique sur le bouton payer on affiche le prix final : pour Mastercard on rajoute 5 euros au prix et pour VISA 3 euros).    -->

<body>


    <form action="12Trait.php" method="POST">
        Saisir un prix <input type="text" , name="prix"> <br>
        Choisir une methode de paiement<select name="optionPayer">
            <option>Mastercard</option>
            <option>VISA</option>
        </select>
        <br>
        <input type="Submit" value="Payer">
    </form>
</body>

</html>