<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire07</title>
</head>
<!-- 7.	Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. Quand on envoie les données, une image de l'animal choisi sera affichée. Les images se trouvent dans le serveur  -->

<body>
    <h2>Choisir le nom d'un animal d'une liste déroulante suivant: </h2>

    <form action="07Trait.php" method="POST">
        <select name="optionAnimaux">
            <?php
            $arrayAnimaux = ["Abeille", "Mouton", "Tigre", "Pirolle"];
            foreach ($arrayAnimaux as $value) {
                echo '<option>' . $value . '</option>';
            }
            ?>
        </select>
        <input type="Submit" value="Envoyer">
    </form>
</body>

</html>