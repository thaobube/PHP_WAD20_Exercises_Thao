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
        echo $e->getMessage();
        //die();
    }
    // var_dump($db);

    //------------||GETTING THE FORM VALUES||-------------
    // var_dump($_POST);

    //getting all of the value from the Update FROM
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $date_publication = $_POST['date_publication'];
    $isbn = $_POST['isbn'];
    $auteur_id = $_POST['auteur_id'];


    //---------------||CREATE THE REQUEST||-----------------
    //*create the request to update the book info to the database

    $sql = "UPDATE livre SET titre = :titre, prix = :prix, description = :description, date_publication =:date_publication, isbn =:isbn, auteur_id =:auteur_id WHERE id =:id";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":date_publication", $date_publication);
    $stmt->bindParam(":isbn", $isbn);
    $stmt->bindParam(":auteur_id", $auteur_id);
    $stmt->execute();
    // var_dump($stmt->errorInfo());

    //---------------||ADDITIONAL INFO||-----------------
    //*Show the hyperlink of homepage
    echo '<a href="./accueil.php">Accueil</a><br><br>';


    //---------------||SHOW THE RESULT||-----------------

    echo '<h3>Le livre a été mis à jour à la base de données</h3>';
    echo '<a href="./afficherTousLivres.php">Voir tout le livre ici </a>';


    ?>
</body>

</html>