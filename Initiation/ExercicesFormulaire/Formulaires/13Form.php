<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire13</title>
</head>
<!-- 13.	Créez un formulaire qui permette d'introduire un prix et le rajouter la TVA. Cette fois ci l'utilisateur choisit la valeur de TVA parmi plusieurs valeurs en utilisant des radios-buttons    -->


<body>
    <form action="13Trait.php" method="POST">
        Saisir un prix <input type="text" , name="prix"> <br>
        Choisir une TVA:
        <br>
        <?php
        $arrayTVA = [
            "6%" => 0.06,
            "12%" => 0.12,
            "21%" => 0.21
        ];
        foreach ($arrayTVA as $key => $value) {
            echo $key . '<input type="radio" name="choixRadio" value="' . $key . '">';
        }
        ?>
        <br>
        <input type="Submit" value="Prix avec TVA">
    </form>

</body>

</html>