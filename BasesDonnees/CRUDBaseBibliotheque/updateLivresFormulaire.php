<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Livres</title>
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

    //création de la requete pour la liste deroulante de ID de l'auteur
    $sql = "SELECT id, prenom, nom FROM auteur";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayAuteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayAuteurs);

    // var_dump($_POST);
    $id_livre = $_POST['id'];
    //création de la requete pour tous les donnee dans la table 'livre'
    $sql = "SELECT * FROM livre WHERE id = '$id_livre'";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayLivres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($arrayLivres);

    echo '<a href="./accueil.php">Accueil</a><br><br>';
    foreach ($arrayAuteurs as $unAuteur) {
        if ($unAuteur['id'] == $arrayLivres[0]["auteur_id"]) {
            $auteurPrenomNom = $unAuteur['prenom'] . ' ' . $unAuteur['nom'];
        }
    }
    // echo $auteurPrenomNom;
    echo '<form action="./updateLivresTraitement.php" method="POST">';
    echo
        '<input type="hidden" value="' . $arrayLivres[0]["id"] . '" name="id">
        Titre de livre <input type="text" name="titre" value = "' . $arrayLivres[0]["titre"] . '"> <br>
        Prix <input type="text" name="prix" value = "' . $arrayLivres[0]["prix"] . '"><br>
        Description <input type="text" name="description" value = "' . $arrayLivres[0]["description"] . '"><br>
        Date de publication <input type="text" name="date_publication" value = "' . $arrayLivres[0]["date_publication"] . '"><br>
        ISBN <input type="text" name="isbn" value = "' . $arrayLivres[0]["isbn"] . '"><br>
        ID de l\'auteur
        <select name="auteur_id"><option>'  . $arrayLivres[0]["auteur_id"] . '. ' . $auteurPrenomNom . '</option>';

    foreach ($arrayAuteurs as $unAuteur) {
        $result = $unAuteur['id'] . ". " . $unAuteur['prenom'] . ' ' . $unAuteur['nom'];
        echo '<option>' . $result . '</option>';
    }
    echo '</select><br><br>        
        <input type="submit" value="Update Info"></form>';
    ?>

</body>

</html>