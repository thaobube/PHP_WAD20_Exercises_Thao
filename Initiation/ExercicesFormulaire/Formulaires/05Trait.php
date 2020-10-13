<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire05</title>
</head>
<!-- 5.	Créez un jeu de lotto en PHP. Stockez les valeurs gagnantes dans un array.-->

<body>
    <?php
    $chiffresChoix = [];
    for ($i = 0; $i < 6; $i++) {
        $chiffresChoix[$i] = $_POST['chiffre' . ($i + 1)];
    }
    $chiffresChoixUnique =  array_unique($chiffresChoix);

    $chiffresGagnants = [];
    for ($i = 0; $i < 7; $i++) {
        do {
            $chiffreRandom = mt_rand(1, 45);
        } while (in_array($chiffreRandom, $chiffresGagnants));
        $chiffresGagnants[]  = $chiffreRandom;
    }

    echo "<h2> Gagnants Lotto est: ";
    for ($i = 0; $i < 6; $i++) {
        echo $chiffresGagnants[$i] . " | ";
    }
    echo "</h2>";
    echo "<h3>Numero Bonus est: " . $chiffresGagnants[6] . "</h3>";

    // $chiffresGagnants = [32, 7,  35,  4,  20, 2, 37];

    $count = 0;
    $countBonus = 0;

    foreach ($chiffresChoixUnique as $value) {
        for ($i = 0; $i < 6; $i++) {
            if ($value == $chiffresGagnants[$i]) {
                $count++;
                break;
            }
        }
    }
    foreach ($chiffresChoixUnique as $value) {
        if ($value == $chiffresGagnants[6]) {
            $countBonus++;
            break;
        }
    }
    echo 'Votre Lotto est : ';
    foreach ($chiffresChoix as $key => $value) {
        echo $value . " | ";
    }
    echo "<br>";
    echo 'Match: ' . $count . '<br>';
    echo 'Bonus: ' . $countBonus . '<br>';

    switch ($count) {
        case '6':
            echo "Félicitation, vous gagnez le Jackpot Lotto : au moins 1.000.000 €";
            break;
        case '5':
            if ($countBonus == 1) {
                echo "Félicitation, vous gagnez le 5+ Lotto : 74.811,50 €";
            } else {
                echo "Félicitation, vous gagnez le 5 Lotto : 1.302,80 €";
            }
            break;
        case '4':
            if ($countBonus == 1) {
                echo "<h4>Félicitation, vous gagnez le 4+ Lotto : 245,70 €</h4>";
            } else {
                echo "<h4>Félicitation, vous gagnez le 4 Lotto : 21,30 €</h4>";
            }
            break;
        case '3':
            if ($countBonus == 1) {
                echo "<h4>Félicitation, vous gagnez le 3+ Lotto : 11,40 €</h4>";
            } else {
                echo "<h4>Félicitation, vous gagnez le 3 Lotto : 6,25 €</h4>";
            }
            break;
        case '2':
            if ($countBonus == 1) {
                echo "<h4>Félicitation, vous gagnez le 2+ Lotto : 3,75 €</h4>";
            } else {
                echo "<h4>Bonne chance pour la prochaine fois!</h4>";
            }
            break;
        case '1':
            if ($countBonus == 1) {
                echo "<h4>Félicitation, vous gagnez le 1+ Lotto : 1,25 €</h4>";
            } else {
                echo "<h4>Bonne chance pour la prochaine fois!</h4>";
            }
            break;
        default:
            echo "<h4>Bonne chance pour la prochaine fois!</h4>";
            break;
    }
    echo '<a href="05Form.php">Essayez à nouveau</a>';


    ?>
</body>

</html>