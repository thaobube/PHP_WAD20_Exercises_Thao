<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 3. Rajoutez une méthode afficher() dans la classe Personne qui affiche le texte suivant:
 "Je suis une personne et je m'appelle <prenom><nom>!!" -->

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
    ?>
</body>

</html>