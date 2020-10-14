<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./LecteurDVD.class.php";
    require_once "./LectureGraveurDVD.class.php";

    $l1 = new LecteurDVD("Hitachi", 600);
    $e1 = new LecteurGraveurDVD("Sony", 600, 400);
    var_dump($l1);
    var_dump($e1);
    ?>
</body>

</html>