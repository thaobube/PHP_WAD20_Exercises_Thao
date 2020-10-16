<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require_once "./Chien.class.php";
    require_once "./Chat.class.php";

    $chien1 = new Chien("Lassie", 12);
    $chat1 = new Chat("Azrael", 5);

    $chien1->ramenerBalle();

    $chat1->grifer();
    ?>
</body>

</html>