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
    // var_dump($db);
    // var_dump($_POST);

    //prise des valeurs du formulaire
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $date_publication = $_POST['date_publication'];
    $isbn = $_POST['isbn'];
    $auteur_id = $_POST['auteur_id'];

    //création de la requete et spécification des paramètres de livre
    $sql = "INSERT INTO livre (id, titre, prix, description, date_publication, isbn, auteur_id) VALUES (null, :titre, :prix, :description, :date_publication, :isbn, :auteur_id)";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":date_publication", $date_publication);
    $stmt->bindParam(":isbn", $isbn);
    $stmt->bindParam(":auteur_id", $auteur_id);
    $stmt->execute();
    // var_dump($stmt->errorInfo());
    echo '<a href="./accueil.php">Accueil</a><br><br>';
    echo '<h3>Super, le livre a été ajouté à la base de données</h3>';
    echo '<a href="./afficherTousLivres.php">Voir tout le livre ici </a>';


    ?>
</body>

</html>