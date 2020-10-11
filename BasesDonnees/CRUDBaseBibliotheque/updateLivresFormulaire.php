<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Livres</title>
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
        die();
    }
    // var_dump($db);

    //------------||GETTING THE FORM VALUES||-------------

    // var_dump($_POST);
    //*Getting the id value of the selected book when the user click on "Update" button
    $id_livre = $_POST['id'];


    //---------------||CREATE THE REQUEST||-----------------
    //*create the request to select the book with the id value when the user click on "Update" button 
    $sql = "SELECT * FROM livre WHERE id = '$id_livre'";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayLivres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayLivres);


    //---------------||CREATE THE REQUEST||-----------------
    //*create the request to select all the authors to show in the dropdown list 
    $sql = "SELECT id, prenom, nom FROM auteur";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayAuteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayAuteurs);

    //---------------||ADDITIONAL INFO||-----------------
    //*Show the hyperlink of homepage
    echo '<a href="./accueil.php">Accueil</a><br><br>';

    //*Create the value of the selected author (firstname + name) corresponded with the selected book for the dropdown list
    foreach ($arrayAuteurs as $unAuteur) {
        if ($unAuteur['id'] == $arrayLivres[0]["auteur_id"]) {
            $auteurNomCompletChoisi = $unAuteur['prenom'] . ' ' . $unAuteur['nom'];
        }
    }
    // echo $auteurNomCompletChoisi;

    //---------------||UPDATE FORM||-----------------

    echo '<form action="./updateLivresTraitement.php" method="POST">';
    echo
        '<input type="hidden" value="' . $arrayLivres[0]["id"] . '" name="id">
        Titre de livre <input type="text" name="titre" value = "' . $arrayLivres[0]["titre"] . '"> <br>
        Prix <input type="text" name="prix" value = "' . $arrayLivres[0]["prix"] . '"><br>
        Description <input type="text" name="description" value = "' . $arrayLivres[0]["description"] . '"><br>
        Date de publication <input type="text" name="date_publication" value = "' . $arrayLivres[0]["date_publication"] . '"><br>
        ISBN <input type="text" name="isbn" value = "' . $arrayLivres[0]["isbn"] . '"><br>
        Auteur <select name="auteur_id"><option>'  . $auteurNomCompletChoisi . '</option>';

    foreach ($arrayAuteurs as $unAuteur) {
        echo '<option value ="' . $unAuteur['id'] . '">' . $unAuteur['prenom'] . ' ' . $unAuteur['nom'] . '</option>';
    }
    echo '</select><br><br>        
        <input type="submit" value="Update Info"></form>';
    ?>
</body>

</html>