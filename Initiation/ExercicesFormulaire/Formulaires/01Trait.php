<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire01</title>
</head>
<!-- 1.	Créez un site contenant un formulaire où l'utilisateur saisira son prénom, nom et âge. Le site doit afficher "Bienvenu XXXX XXXX, vous avez XXXX ans!" -->

<body>
    <?php
    echo 'Bienvenue ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' ,vous avez ' . $_POST['age'] . ' ans!';
    ?>
</body>

</html>