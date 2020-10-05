<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire17</title>
</head>
<!--17.	Créez un formulaire qui permette à un utilisateur d'introduire son login et son password.  
o	Aucun de deux ne peut être vide ;)
o	Les deux doivent contenir uniquement des lettres et des numéros et avoir entre 8 et 30 caractères
Si les valeurs sont correctes, le script les affiche en majuscule. Utilisez les fonctions  ctype, strlen et strtoupper pour vous faciliter la tâche
-->


<body>
    <?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (ctype_alnum($login) && ctype_alnum($password) && (strlen($login) <= 30 && 8 <= strlen($login)) && (strlen($password)) <= 30 && 8 <= strlen($password)) {
        echo "Les valeurs sont correctes! <br>";
        echo "Login : " . strtoupper($login) . "<br>";
        echo "Password : " . strtoupper($password);
    } else {
        echo "Les valeurs ne sont pas correctes! <br>";
        echo '<a href="17Form.php">Refaire - le</a>';
    }
    ?>
</body>

</html>