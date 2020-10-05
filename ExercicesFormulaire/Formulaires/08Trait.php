<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire08</title>
</head>
<!-- 8.	Créez un formulaire qui nous permette d'introduire un prix et de calculer le prix TVAC. La TVA est choisie par l'utilisateur parmi les valeurs d'une liste déroulante. Forcez (HTML) à l'utilisateur à saisir une valeur numérique.  -->


<body>

    <?php
    $arrayTVA = [
        "6%" => 0.06,
        "12%" => 0.12,
        "21%" => 0.21
    ];
    $prix = $_POST['prix'];
    $TVAChoix = $_POST['optionTVA'];
    if (is_numeric($prix)) {
        foreach ($arrayTVA as $key => $value) {
            if ($key == $TVAChoix) {
                $prixTVA = $prix * (1 + $value);
            }
        }
        echo "Prix avec TVA = " . $TVAChoix . " : " . $prixTVA;
    } else {
        echo "Il faut saisir une valeur numérique pour le prix <br>";
        echo '<a href="08Form.php">Refais-le</a>';
    }

    ?>
</body>

</html>