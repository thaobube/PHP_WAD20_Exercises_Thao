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
    var_dump($db);
    var_dump($_POST);

    //prise des valeurs du formulaire
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $date_publicationLivre = $_POST['date_publicationLivre'];
    $date_retourLivre = $_POST['date_retourLivre'];
    $isbn = $_POST['isbn'];
    $nomAuteur = $_POST['nomAuteur'];
    $nationaliteAuteur = $_POST['nationaliteAuteur'];

    //création de la requete et spécification des paramètres d'auteur
    $sql = "INSERT INTO auteur (id, nom, nationalite) VALUES (null, :nomAuteur, :nationaliteAuteur)";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":nomAuteur", $nomAuteur);
    $stmt->bindParam(":nationaliteAuteur", $nationaliteAuteur);
    $stmt->execute();
    var_dump($stmt->errorInfo());

    //création de la requete et spécification des paramètres de livre
    $sql = "INSERT INTO livre (id, titre, prix, description, date_publication, date_retour, isbn, auteur_id) VALUES (null, :titre, :prix, :description, :date_publicationLivre, :date_retourLivre, :isbn, LAST_INSERT_ID())";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":date_publicationLivre", $date_publicationLivre);
    $stmt->bindParam(":date_retourLivre", $date_retourLivre);
    $stmt->bindParam(":isbn", $isbn);
    $stmt->execute();
    var_dump($stmt->errorInfo());


    ?>
</body>

</html>