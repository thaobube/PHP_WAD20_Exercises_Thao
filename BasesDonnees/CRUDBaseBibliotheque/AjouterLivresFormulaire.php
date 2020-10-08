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
    } catch (Exception $e) {
        echo "Il a eu une erreur";
        echo $e->getMessage();
        //die();
    }

    //création de la requete
    $sql = "SELECT id, nom FROM auteur";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayResultat);
    echo '<a href="./accueil.php">Accueil</a><br><br>';

    ?>
    <form action="./AjouterLivresTraitement.php" method="POST">
        Titre de livre <input type="text" name="titre"> <br>
        Prix <input type="text" name="prix"><br>
        Description <input type="text" name="description"><br>
        Date de publication <input type="text" name="date_publication"><br>
        ISBN <input type="text" name="isbn"><br>
        ID de l'auteur
        <select name="auteur_id">
            <?php
            foreach ($arrayResultat as $array) {
                $result = $array['id'] . ". " . $array['nom'];
                echo '<option>' . $result . '</option>';
            }
            ?>
        </select>
        <!-- Nom d'auteur <input type="text" name="nomAuteur"><br>
        Nationalite d'auteur <input type="text" name="nationaliteAuteur"><br> -->
        <br>
        <br>
        <br>
        <input type="submit" value="Rajouter de livre">
    </form>
</body>

</html>