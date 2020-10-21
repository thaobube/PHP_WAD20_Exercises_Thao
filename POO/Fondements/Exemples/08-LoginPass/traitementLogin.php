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
    //1. Connecter à la BD
    include_once "./config/db.php";
    try {
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        echo "Erreur";
        die();
    }
    //2. Obtenir l'email et le mot de pass
    $email = $_POST['email'];
    $mot_pass = $_POST['mot_pass'];

    //3. Chercher le client par email

    $sql = "SELECT * FROM client WHERE email = :email";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    //var_dump($stmt->errorInfo());
    $client = $stmt->fetchAll((PDO::FETCH_ASSOC));
    var_dump($client);

    //4.Compare les passwords: celui du formulaire et celui de la BD
    if (!empty($client)) {
        $mot_pass_hash_bd = $client[0]['mot_pass'];
        if (password_verify($mot_pass, $mot_pass_hash_bd)) {
            //bon pass
            header("location: ./accueil.php?email=" . $email);
        } else {
            echo "Mot de pass incorrect";
            die();
            //redirigew ver login; page erreur, utiliser ajax...
        }
    } else {
        //il n'y a pas de client avec cet email
        echo "Client pas trouvé";
        die();
        //re-dirigew vers la page 
    }

    ?>

</body>

</html>