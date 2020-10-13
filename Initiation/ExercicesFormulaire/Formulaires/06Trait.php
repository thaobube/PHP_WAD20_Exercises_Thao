<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire06</title>
</head>
<!-- 6.	Créez un formulaire qui permette de saisir un prix et le rajoute une TVA du 12%. L’utilisateur cliquera sur un bouton et le résultat du calcul sera affiché dans une autre page. -->


<body>
    <?php
    $prix = $_POST['prix'];
    define("TVA", 0.12);
    $prixTVA =  $prix * 1.12;

    echo "Prix avec TVA: " . $prixTVA;

    ?>
</body>

</html>