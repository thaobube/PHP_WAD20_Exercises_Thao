<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include_once "./config/db.php";
    try {
        $db = new PDO(DBDRIVER . ': host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        echo "Erreur";
        die();
    }
    include_once "./Livre.php";
    include_once "./LivreManager.php";

    $livreManager = new LivreManager($db);
    // $livresArray = $livreManager->selectAll();
    // var_dump($livresArray);

    $livreObjetsArray = $livreManager->selectAll();
    // var_dump($livreObjetsArray);
    var_dump($livreObjetsArray[5]);
    //effacer en envoyant un objet
    // $livreManager->delete($livreObjetsArray[5]);
    // // //effacer en envoyant par id
    // $livreManager->deletepParId(12);

    $mesLivreFiltres = $livreManager->selectFiltres([
        'titre' => 'La guerre de Togo',
        'prix' => 18
    ]);
    var_dump($mesLivreFiltres);
    $mesLivreFiltresSansFiltres = $livreManager->selectFiltres();
    // var_dump($mesLivreFiltresSansFiltres);

    $nouveauLivre = new Livre([
        'titre' => 'Superman',
        'prix' => 20,
        'description' => 'blibliblibli',
        'date_publication' => '2000-09-29',
        'isbn' => '4235234523452345'
    ]);
    $livreManager->insert($nouveauLivre);
    ?>
</body>

</html>