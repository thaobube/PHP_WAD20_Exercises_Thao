<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 1. Créez les classes Chien et Chat. Créez un ensemble de propriétés et méthodes à votre choix pour chaque classe. Trouvez une classe plus générale contenant tous les propriétés communes à ces deux classes et utilisez l'héritage pour éviter la duplication du code. -->

<body>
    <?php

    class Animal
    {
        public $nom;
        public $age;
        public $poid;

        public function __construct($nom, $age, $poid)
        {
            $this->nom =  $nom;
            $this->age =  $age;
            $this->poid =  $poid;
        }

        public function manger()
        {
            echo "Je veux manger!!!";
        }
    }
    ?>
</body>

</html>