<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfficherTousLivres</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<!-- -	Créez une page où on affichera les informations de tous les livres -->

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

    //création de la requete et spécification des paramètres de livre
    $sql = "SELECT id, titre, prix, description, date_publication, isbn, auteur_id  FROM livre";
    $stmt = $db->prepare($sql); // envoyer la requête au serveur
    $stmt->execute(); // lancer la requête

    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC); // créer un array qui contient des arrays assoc
    //var_dump($arrayResultat);

    echo '<a href="./accueil.php">Accueil</a><br><br>';
    //Afficher tous les livres
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

    ?>
</body>

</html>