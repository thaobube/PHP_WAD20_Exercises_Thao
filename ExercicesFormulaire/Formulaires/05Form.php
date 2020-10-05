<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire05</title>
</head>
<!-- 5.	Créez un jeu de lotto en PHP. Stockez les valeurs gagnantes dans un array. -->

<body>

    <h2>Sélectionnez 6 numéros entre 1 et 45</h2><br>
    <form action="05Trait.php" method="POST">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo 'Chiffre' . $i . ' <select name="chiffre' . $i . '">';
            for ($j = 1; $j <= 45; $j++) {
                echo '<option>' . $j . '</option>';
            }
            echo '</select>';
        }
        ?>
        <input type="Submit">
        <br>
        <br>

        <a href="https://www.loterie-nationale.be/nos-jeux/lotto/resultats-tirage/03-10-2020">See More</a>
    </form>
</body>

</html>