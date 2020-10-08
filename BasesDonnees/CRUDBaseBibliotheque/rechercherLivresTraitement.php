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
    } catch (Exception $e) {
        echo "Il a eu une erreur";
        echo $e->getMessage();
        //die();
    }
    // var_dump($db);
    // var_dump($_POST);


    //prise des valeurs du formulaire
    $titre = "%" . $_POST['titre'] . "%";
    $titre = strtoupper($titre);



    //création de la requete
    $sql = "SELECT titre FROM livre WHERE UPPER(titre)LIKE :titre";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":titre", $titre);

    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($arrayResultat);
    echo '<a href="./accueil.php">Accueil</a><br><br>';
    if (!empty($arrayResultat)) {
        echo '<h3>La liste des livres pour le mot clé "' . $_POST['titre'] . '":</h3>';
        echo '<ol>';
        foreach ($arrayResultat as $array) {
            foreach ($array as $value) {
                echo '<li>' . $value . '</li>';
            }
        }
        echo '</ol>';
    } else {
        echo '<h3>Désolé, nous n\'en trouvons pas pour le mot clé "' . $_POST['titre'] . '":</h3>';
    }

    // if (!empty($arrayResultat)) {
    //     echo '<h3>La liste des livres pour le mot clé "' . $_POST['titre'] . '":</h3>';
    //     echo '<table>';
    //     foreach ($arrayResultat as $array) {
    //         foreach ($array as $value) {
    //             echo '<tr><td>' . $value . '</td></tr>';
    //         }
    //     }
    //     echo '</table>';
    // } else {
    //     echo '<h3>Désolé, nous n\'en trouvons pas pour le mot clé "' . $_POST['titre'] . '":</h3>';
    // }

    ?>
</body>

</html>