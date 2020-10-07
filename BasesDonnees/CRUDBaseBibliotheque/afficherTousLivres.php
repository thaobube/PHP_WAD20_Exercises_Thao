<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./config/db.php";
    try {
        //créer une connexion à la BD
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $exc) {
        var_dump($exc);
    }

    $nomAuteurList = ['Bird', 'Collet', 'Gee'];
    $nationaliteAuteurList = ['English', 'Francais', 'Spanish'];
    for

    $sql = "INSERT INTO auteur (id, nom, nationalite) VALUES (null, 'Bird', 'English')";
    $stmt = $db->prepare(($sql));
    $stmt->execute();
    var_dump($stmt->errorInfo());

    $sql = "INSERT INTO auteur (id, nom, nationalite) VALUES (null, 'Collet', 'Francais')";
    $stmt = $db->prepare(($sql));
    $stmt->execute();
    var_dump($stmt->errorInfo());

    ?>
</body>

</html>