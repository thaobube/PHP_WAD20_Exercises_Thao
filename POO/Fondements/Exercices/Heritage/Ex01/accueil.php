<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Chat.class.php";
    require_once "./Chien.class.php";

    $chien1 = new Chien("Lulu", 3, 5, "false");
    $chat1 = new Chat("Lili", 1, 2, "jaune");

    echo "<br>" . $chien1->nom;
    echo "<br>" . $chat1->couleur . "<br>";

    echo "<br>" . $chien1->manger();
    echo "<br>" . $chat1->manger();

    echo "<br>" . $chien1->aboyer();
    echo "<br>" . $chat1->griffer();



    ?>
</body>

</html>