<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 4. Rajoutez l'état civil à la classe précédant ainsi que les méthodes pour l'accéder -->

<body>
    <?php
    include "./Personne.class.php";
    $p1 = new Personne();
    //$p1->nom = "Nguyen";//pas possible car private
    //echo $p1->nom;//pas possible car private
    $p1->setNom("Nguyen");
    $nom = $p1->getNom(); //Nguyen

    $p1->setPrenom("Thao");
    $prenom = $p1->getPrenom();

    echo "Je suis une personne et je m'appelle " .  $prenom . " " . $nom . " !!";

    $p1->setEtatCivil("mariée");
    $etatCivil = $p1->getEtatCivil();

    echo "<br>";
    echo "Je suis " . $etatCivil . " !";


    ?>
</body>

</html>