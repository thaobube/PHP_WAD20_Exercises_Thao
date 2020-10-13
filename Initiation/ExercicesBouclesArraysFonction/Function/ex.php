<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //fonction qui dit bonjour
    function bonjour()
    {
        echo "<h5>Bonjour tout simple!! </h5>";
    }
    bonjour();

    //fonction avec un paramètres et sans retour
    function bonjourSpecial($prenom, $nom)
    {
        echo "<h5>Bonjour " . $prenom . " " . $nom . "</h5>";
    }
    bonjourSpecial("Alessia", "Di Coure");

    //fonction qui affiche la somme de deux valeurs reçues en paramètre
    function afficheSomme($a, $b)
    {
        echo "<h5>La somme de deux valeurs est " . ($a + $b) . "</h5>";
    }
    afficheSomme(3, 5);

    //fonction qui renvoie la somme de deux valeurs reçues en paramètre
    function renvoyerSomme($a, $b)
    {

        $somme = $a + $b;
        return $somme;
    }
    echo "<h5>La somme est : " . renvoyerSomme(40, 100) . "</h5>";

    //fonction qui échange les valeurs de deux variables reçues en paramètre
    function echangerVars(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $a = 8;
    $b = 5;
    echangerVars($a, $b);
    echo "<h5>Changement de variables : </h5>";
    echo "<h5>La première valeur est : " . $a . "</h5>"; //5
    echo "<h5>La première valeur est : " . $b . "</h5>"; //8

    //fonction qui multiplie * 2 les éléments d'un tablea
    // le tableau original est modifié
    $tab = [4, 5, 9];
    function doubleTableau(&$unTab)
    {
        for ($i = 0; $i < count($unTab); $i++) {
            $unTab[$i] *= 2;
        }
    }
    doubleTableau($tab);
    var_dump($tab); // les éléments son doublés!

    //fonction qui reçoit un tableau et renvoie un nouveau tableau
    //Ce nouveau tableau contient les éléments du tableau original multipliés  x 2 => Diem khac biet so voi tren la can co retour

    $tab = [4, 5, 9];
    function doubleTableauReturn($unTableau)
    {
        //$nouveauTableau = [];
        for ($i = 0; $i < count($unTableau); $i++) {
            $unTableau[$i] *= 2;
            //$nouveauTableau[] = $unTableau[$i] * 2;
        }
        return $unTableau;
        //return $nouveauTableau;
    }
    $tab2 = doubleTableauReturn($tab);
    var_dump($tab2); // les éléments son doublés!
    var_dump($tab);

    ?>

</body>

</html>