<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //--------------||CREATE A CONNECTION TO THE DB||---------
    include "./config/db.php";
    try {
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        echo "Il a eu une erreur";
        echo $e->getMessage(); //seulement en dev!
        die();
    }
    // var_dump($db);

    //---------------||CREATE THE REQUEST||-----------------
    //*create the request to select all the authors to show in the dropdown list
    $sql = "SELECT id, nom, prenom FROM auteur ORDER BY prenom";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayAuteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($arrayAuteurs);


    //---------------||ADDITIONAL INFO||-----------------
    //*Show the hyperlink of homepage
    echo '<a href="./accueil.php">Accueil</a><br><br>';

    ?>
    <!-- ------------||ADD FORM||------------------------ -->

    <form action="./AjouterLivresTraitement.php" method="POST">
        Titre de livre <input type="text" name="titre"> <br>
        Prix <input type="text" name="prix"><br>
        Description <input type="text" name="description"><br>
        Date de publication <input type="date" name="date_publication"><br>
        ISBN <input type="text" name="isbn"><br>
        Auteur
        <select name="auteur_id">
            <?php
            foreach ($arrayAuteurs as $unAuteur) {
                echo '<option value ="' . $unAuteur['id'] . '">' . $unAuteur['prenom'] . ' ' . $unAuteur['nom'] . '</option>';
            }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Rajouter de livre">
    </form>
</body>

</html>