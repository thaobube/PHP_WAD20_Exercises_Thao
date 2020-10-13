<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Bonjour bienvenue à notre site!<br>";
    // $arr1 = [4, 9, 15];
    // echo $arr1[2];

    // $arr2 = [
    //     'age' => 27,
    //     'hobby' => 'lire',
    //     'nationalite' => 'Belge'
    // ];
    // echo "<br>";
    // echo "Mon hobby est " . $arr2['hobby'];
    echo "<br>";
    echo "Votre nom: " . $_POST['nom'];
    echo "<br>";
    echo "Votre prenom: " . $_POST['prenom'];

    ?>
</body>

</html>