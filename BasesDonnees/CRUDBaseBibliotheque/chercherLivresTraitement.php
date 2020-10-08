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
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME .
            ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $exc) {
        echo "Il a eu une erreur";
    }
    // var_dump($db);
    var_dump($_POST);

    //prise des valeurs du formulaire
    $titre = "%" . $_POST['titre'] . "%";
    $titre = strtoupper($titre);

    //création de la requete
    $sql = "SELECT titre FROM livre WHERE UPPER(titre)LIKE :titre";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":titre", $titre);

    $stmt->execute();
    var_dump($stmt->errorInfo());

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($arrayResultat);

    ?>
</body>

</html>