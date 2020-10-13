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

    var_dump($_POST);

    //prise des valeurs du formulaire
    $code = $_POST['code']; //manque filter_vars
    $villeDepart = $_POST['villeDepart'];
    $villeDestination = $_POST['villeDestination'];

    //création de la requete et spécification des paramètres
    $sql = "INSERT INTO trains (id, code, villeDepart, villeDestination)" . "VALUE(null, :code, :villeDepart, :villeDestination)";

    //préparation de la requete
    $stmt = $db->prepare($sql);

    //donner des valeurs aux paramètres
    $stmt->bindParam(":code", $code);
    $stmt->bindParam(":villeDepart", $villeDepart);
    $stmt->bindParam(":villeDestination", $villeDestination);

    //lancer la requete
    $stmt->execute();
    var_dump($stmt->errorInfo());
    var_dump($db->errorInfo());



    ?>
</body>

</html>