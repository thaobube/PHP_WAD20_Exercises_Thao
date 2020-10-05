<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire15</title>
</head>
<!-- 15.	Créez un formulaire contenant un prix. La page doit contenir deux radio buttons "Envoyer à domicile" ou "Retirer sur place". Rajoutez un bouton "Envoyer" qui nous permettra d'envoyer les données du formulaire et afficher le prix. Si le client demande l'envoi à domicile le prix sera augmenté de 5 euros -->


<body>
    <form action="15Trait.php" method="POST">
        Saisir un prix <input type="text" , name="prix"> <br>
        Choisir:
        <br>
        <input type="radio" name="choixRadio" value="domicile">Envoyer à domicile
        <input type="radio" name="choixRadio" value="surplace">Retirer sur place

        <br>
        <input type="Submit" value="Envoyer">
    </form>

</body>

</html>