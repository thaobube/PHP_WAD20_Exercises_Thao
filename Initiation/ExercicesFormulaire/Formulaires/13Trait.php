<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire13</title>
</head>
<!--13.	Créez un formulaire qui permette d'introduire un prix et le rajouter la TVA. Cette fois ci l'utilisateur choisit la valeur de TVA parmi plusieurs valeurs en utilisant des radios-buttons-->


<body>
    <?php
    $arrayTVA = [
        "6%" => 0.06,
        "12%" => 0.12,
        "21%" => 0.21
    ];
    $prix = $_POST['prix'];
    $TVAChoix = $_POST['choixRadio'];
    if (is_numeric($prix) && !empty($prix)) {
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