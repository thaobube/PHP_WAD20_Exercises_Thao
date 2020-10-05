<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire12</title>
</head>
<!--12.	Créez un formulaire où l’utilisateur peut saisir un prix. Le formulaire a aussi une liste déroulante contenant de possibilités de paiement et un bouton « Payer ». Quand l’utilisateur clique sur le bouton payer on affiche le prix final : pour Mastercard on rajoute 5 euros au prix et pour VISA 3 euros).   -->


<body>

    <?php
    $prix = $_POST['prix'];
    $payerChoix = $_POST['optionPayer'];

    if ($payerChoix == 'Mastercard') {
        $prixTotal = $prix + 5;
    }
    if ($payerChoix == 'VISA') {
        $prixTotal = $prix + 3;
    }

    echo "Prix final = " . $prixTotal . "euros";

    ?>
</body>

</html>