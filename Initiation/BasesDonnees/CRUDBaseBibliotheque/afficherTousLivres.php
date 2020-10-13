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


    //NEED TO CHECK IF THE 'DELETE' BUTTON IS CLICKED OR NOT
    if (!isset($_POST['id'])) {
        //*in this case, the 'Delete' button is not clicked => display all the books
        //---------------||CREATE THE REQUEST||-----------------
        //*create the request to select the infos from 2 tables: livres and auteur 
        $sql = "SELECT livre.id, livre.titre, livre.prix, livre.description, livre.date_publication, livre.isbn, auteur.prenom AS auteur_prenom, auteur.nom AS auteur_nom  
        FROM livre
        INNER JOIN auteur
        ON auteur.id = livre.auteur_id
        ORDER BY livre.id";

        $stmt = $db->prepare($sql); // envoyer la requête au serveur
        $stmt->execute(); // lancer la requête

        // créer un array qui contient des arrays assoc
        $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($arrayResultat);


        //---------------||ADDITIONAL INFO||-----------------
        //*Show the hyperlink of homepage
        echo '<a href="./accueil.php">Accueil</a><br><br>';


        //---------------||SHOW ALL BOOKS IN TABLE||--------------
        //*Afficher tous les livres en tables
        echo '<table>';
        echo '<tr>';
        foreach ($arrayResultat[0] as $key => $value) {
            echo '<th>' . strtoupper($key) . '</th> ';
        }
        echo '<th>' . 'UPDATE' . '</th> ';
        echo '<th>' . 'DELETE' . '</th> ';
        echo  ' </tr>';

        foreach ($arrayResultat as $livre) {
            echo '<tr>';
            foreach ($livre as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '<td><form action="./updateLivresFormulaire.php" method="POST">
        <input type="hidden" value="' . $livre["id"] . '" name = "id">
        <input type="submit" value="Update"></form></td>';

            echo '<td><form action="" method="POST">
        <input type="hidden" value="' . $livre["id"] . '" name = "id">
        <input type="submit" value="Delete"></form></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        //*in this case, the 'Delete' button is clicked => 1st step: delete the selected book => 2nd step: redisplay all the books

        //------------||GETTING THE FORM VALUES||-------------
        // var_dump($_POST);
        //*Getting the id value of the selected book when the user click on "Delete" button
        $id_livre = $_POST['id'];
        //echo $id_livre;
        //---------------||CREATE THE REQUEST||-----------------
        //*create the request to delete the author with the id = auteur_id of the selected book
        $sql = "DELETE FROM livre
        WHERE id =:id";
        //error: 'Cannot delete or update a parent row: a foreign key constraint fails (`bibliotheque`.`exemplaire`, CONSTRAINT `exemplaire_ibfk_1` FOREIGN KEY (`livre_id`) REFERENCES `livre` (`id`))'

        // $sql = "DELETE auteur, livre, exemplaire, emprunt, client FROM auteur
        // INNER JOIN livre
        // ON livre.auteur_id = auteur.id
        // INNER JOIN exemplaire
        // ON livre.id = exemplaire.livre_id
        // INNER JOIN emprunt
        // ON exemplaire.id = emprunt.exemplaire_id
        // INNER JOIN client
        // ON client.id = emprunt.client_id
        // WHERE livre.id =:id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id_livre);
        $stmt->execute();
        // var_dump($stmt->errorInfo());

        //---------------||CREATE THE REQUEST||-----------------
        //*create the request to select the infos from 2 tables: livres and auteur 
        $sql = "SELECT livre.id, livre.titre, livre.prix, livre.description, livre.date_publication, livre.isbn, auteur.prenom AS auteur_prenom, auteur.nom AS auteur_nom  
        FROM livre
        INNER JOIN auteur
        ON auteur.id = livre.auteur_id
        ORDER BY livre.id";

        $stmt = $db->prepare($sql); // envoyer la requête au serveur
        $stmt->execute(); // lancer la requête

        // créer un array qui contient des arrays assoc
        $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($arrayResultat);

        //---------------||ADDITIONAL INFO||-----------------
        //*Show the hyperlink of homepage
        echo '<a href="./accueil.php">Accueil</a><br><br>';

        //---------------||SHOW ALL BOOKS IN TABLE||--------------
        //*Afficher tous les livres en tables
        echo '<table>';
        echo '<tr>';
        foreach ($arrayResultat[0] as $key => $value) {
            echo '<th>' . strtoupper($key) . '</th> ';
        }
        echo '<th>' . 'UPDATE' . '</th> ';
        echo '<th>' . 'DELETE' . '</th> ';
        echo  ' </tr>';

        foreach ($arrayResultat as $livre) {
            echo '<tr>';
            foreach ($livre as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '<td><form action="./updateLivresFormulaire.php" method="POST">
            <input type="hidden" value="' . $livre["id"] . '" name = "id">
            <input type="submit" value="Update"></form></td>';

            echo '<td><form action="" method="POST">
            <input type="hidden" value="' . $livre["id"] . '" name = "id">
            <input type="submit" value="Delete"></form></td>';
            echo '</tr>';
        }
        echo '</table>';
    }


    ?>
</body>

</html>