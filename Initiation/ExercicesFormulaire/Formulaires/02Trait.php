<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire02</title>
</head>
<!-- 2.	Créez une page contenant un formulaire où on saisit un nom et un prénom. Un autre script traitera les données envoyées et affichera un message de salutation. Si les valeurs rentrées correspondent à votre nom et prénom, le script affichera le message "Que la force soi avec toi." et un lien vers le site officiel de Star Wars -->

<body>

    <?php
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    define("firstName", "Thao");
    define("lastName", "Nguyen");

    echo 'Bienvenue ' . $prenom . ' ' . $nom . ' !';
    if ($prenom == firstName && $nom == lastName) {
        echo "<br>Que la force soi avec toi.";
        echo '<a href="https://www.starwars.com/">Click here</a>';
    }
    ?>
</body>

</html>