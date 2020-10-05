<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire07</title>
</head>
<!-- 7.	Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. Quand on envoie les données, une image de l'animal choisi sera affichée. Les images se trouvent dans le serveur -->


<body>
    <?php
    $animalChoix = $_POST['optionAnimaux'];
    $arrayAnimaux = ["Abeille", "Mouton", "Tigre", "Pirolle"];
    foreach ($arrayAnimaux as $value) {
        if ($value == $animalChoix) {
            echo '<img src="07Images/' . mb_strtolower($animalChoix) . '.jpg" alt="">';
            break;
        }
    }

    ?>
</body>

</html>