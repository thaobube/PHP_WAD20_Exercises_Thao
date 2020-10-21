<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    var_dump($_POST);
    //0. Connecter à la BD
    include_once "./config/db.php";
    try {
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        echo "Erreur";
        die();
    }

    //1. Vérifier si le client existe

    //2. Vérifier passwords pareils
    $mot_pass = $_POST['mot_pass'];
    $mot_pass_copy = $_POST['mot_pass_copy'];
    if ($mot_pass != $mot_pass_copy) {
        echo "Les passwords ne coincident pas";
        die(); //neu ko dung die thi se tiep tuc va connecter DB
        //header("location: ....")
    }

    //3. Hasher le password

    $mot_pass_hash = password_hash($mot_pass, PASSWORD_DEFAULT, ['cost' => 12]);
    var_dump($mot_pass_hash);

    //4. Créer un requête INSERT
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];

    $sql = "INSERT INTO client (id, nom, prenom, adresse, email, mot_pass) VALUES (null, :nom, :prenom, :adresse, :email, :mot_pass)";

    //5. Lancer la requête

    $stmt = $db->prepare($sql);
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":prenom", $prenom);
    $stmt->bindValue(":adresse", $adresse);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":mot_pass", $mot_pass_hash); //attention!!! pas stocker le password
    $stmt->execute();
    var_dump($stmt->errorInfo());

    ?>

</body>

</html>