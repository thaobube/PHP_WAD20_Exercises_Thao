<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire03</title>
</head>
<!-- 3.	Créez un site où l'utilisateur doit deviner un chiffre au hasard entre 0 e 10 (ce chiffre est créé par l'ordinateur en utilisant la fonction mt_rand()). Si la personne gagne, affichez une photo comme prix. Conseil : Apprenez à utiliser la fonction avant d'essayer de créer le site -->

<body>

    <?php
    $devinerChiffre = $_POST['chiffre'];
    $aleatoireChiffre = mt_rand(0, 10);

    if ($devinerChiffre == $aleatoireChiffre) {
        echo '<img src="03.jpg" alt="photo">';
    } else {
        echo "Je vous souhaite bonne chance la prochaine fois";
    }
    ?>
</body>

</html>