<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <?php
    include "./config/db.php";

    try {
        //créer une connexion à la BD
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $exc) {
        echo "Il a eu une erreur";
    }
    //var_dump($db);

    //création de la requete et spécification des paramètres de livre
    $sql = "SELECT * FROM livre";

    $stmt = $db->prepare($sql); // envoyer la requête au serveur
    $stmt->execute(); // lancer la requête

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC); // créer un array qui contient des arrays assoc
    //var_dump($arrayResultat);

    //Afficher tous les livres
    foreach ($arrayResultat as $livre) {
        foreach ($livre as $key => $value) {
            echo  strtoupper($key) . ' : ' . $value . '<br>';
        }
        echo '<br>' . '<br>';
    }





    ?>
</body>

</html>