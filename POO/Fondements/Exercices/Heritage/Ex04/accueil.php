<!DOCTYcE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>


    <body>
        <?php
        require_once "./CompteBancaire.class.php";

        $c1 = new CompteBancaire();
        $c1->numeroDeCompte = "BE001";

        $c1->setLigneDeCredit(100);

        echo $c1->getSolde();
        echo "<br>";
        $c1->rajouter(1000);
        echo $c1->getSolde();
        echo "<br>";
        $c1->rajouter(250);
        echo $c1->getSolde();
        echo "<br>";

        $c1->enlever(500);
        echo $c1->getSolde();
        echo "<br>";
        $c1->enlever(900);
        echo "<br>";
        echo $c1->getSolde();
        echo "<br>";

        $c1->isBloque = true;
        $c1->rajouter(250);
        echo "<br>";
        echo $c1->getSolde();
        echo "<br>";


        ?>
    </body>

    </html>