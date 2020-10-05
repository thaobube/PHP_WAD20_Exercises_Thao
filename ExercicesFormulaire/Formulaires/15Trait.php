<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire15</title>
</head>
<!--15.	Créez un formulaire contenant un prix. La page doit contenir deux radio buttons "Envoyer à domicile" ou "Retirer sur place". Rajoutez un bouton "Envoyer" qui nous permettra d'envoyer les données du formulaire et afficher le prix. Si le client demande l'envoi à domicile le prix sera augmenté de 5 euros -->


<body>
    <?php

    $prix = $_POST['prix'];
    $prendreChoix = $_POST['choixRadio'];
    if (is_numeric($prix) && !empty($prix)) {
        if ($prendreChoix == 'domicile') {
            echo "Prix final = " . ($prix + 5);
        }
        if ($prendreChoix == 'surplace') {
            echo "Prix final = " . $prix;
        }
    } else {
        echo "Il faut saisir une valeur numérique pour le prix <br>";
        echo '<a href="08Form.php">Refais-le</a>';
    }
    ?>
</body>

</html>