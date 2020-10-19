<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include_once "./config/db.php";
    try {
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        echo "Erreur";
        die();
    }
    include_once "./Livre.php";
    include_once "./LivreManager.php";

    $livreManager = new LivreManager($db);
    // $livresArray = $livreManager->selectAll();
    // var_dump($livresArray);

    $livreObjetsArray = $livreManager->selectAll();
    var_dump($livreObjetsArray);

    ?>
</body>

</html>