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
    //créer une connexion à la BD
    $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    var_dump($db);

    $sql = "SELECT id, code, villeDepart, villeDestination FROM trains " . "WHERE villeDepart = 'Bruxelles'";
    $objRequete = $db->prepare($sql);
    $objRequete->execute();
    $arrayResultat = $objRequete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($arrayResultat);

    // $sql = "SELECT id, code, villeDepart, villeDestination FROM trains " . "WHERE villeDepart = :villeDepartParam";

    // $objRequete = $db->prepare($sql);

    // $villeDepart = "Bruxelles";
    // $objRequete->bindParam(":villeDepartParam", $villeDepart);
    // $objRequete->execute();

    // $arrayResultat = $objRequete->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayResultat);
    ?>
</body>

</html>