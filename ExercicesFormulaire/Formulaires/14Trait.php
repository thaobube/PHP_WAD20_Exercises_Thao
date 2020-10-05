<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire14</title>
</head>
<!--14.	Créez un formulaire où on saisit un prix. Le formulaire doit avoir aussi une caisse à cocher "Réduction" qui permet d'appliquer une réduction d'un 10% au prix-->


<body>
    <?php
    $prix = $_POST['prix'];
    $isReduction = $_POST['checkreduction'];

    if (is_numeric($prix)) {
        if (!empty($isReduction)) {
            echo "Prix avec la réduction 10% = " . ($prix * 0.9);
        }
    } else {
        echo "Il faut saisir une valeur numérique pour le prix <br>";
        echo '<a href="08Form.php">Refais-le</a>';
    }
    ?>
</body>

</html>