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

    //*Getting the value of the book title 
    $titre = "%" . $_POST['titre'] . "%";
    $titre = strtoupper($titre);

    //---------------||CREATE THE REQUEST||-----------------
    //*create the request to select the infos from 2 tables: livres and auteur 
    $sql = "SELECT livre.id, livre.titre, livre.prix, livre.description, livre.date_publication, livre.isbn, auteur.nom AS auteur_nom, auteur.prenom AS auteur_prenom 
    FROM livre
    INNER JOIN auteur
    ON auteur.id = livre.auteur_id
    WHERE UPPER(titre)LIKE :titre
    ORDER BY livre.id";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":titre", $titre);
    $stmt->execute();
    //var_dump($stmt->errorInfo());

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($arrayResultat);


    //---------------||ADDITIONAL INFO||-----------------
    //*Show the hyperlink of homepage
    echo '<a href="./accueil.php">Accueil</a><br><br>';

    //---------------||SHOW THE SEARCH RESULTS||--------------
    if (!empty($arrayResultat)) {
        echo '<h3>La liste des livres pour le mot clé "' . $_POST['titre'] . '":</h3>';
        echo '<table>';
        echo '<tr>';
        foreach ($arrayResultat[0] as $key => $value) {
            echo '<th>' . strtoupper($key) . '</th> ';
        }
        echo '<th>' . 'UPDATE' . '</th> ';
        echo  ' </tr>';
        foreach ($arrayResultat as $livre) {
            echo '<tr>';
            foreach ($livre as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '<td><form action="./updateLivresFormulaire.php" method="POST">
        <input type="hidden" value="' . $livre["id"] . '" name = "id">
        <input type="submit" value="Update"></form></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<h3>Désolé, nous n\'en trouvons pas pour le mot clé "' . $_POST['titre'] . '":</h3>';
    }

    ?>
</body>

</html>