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
    require_once "./Animal.class.php";
    class Chien extends Animal
    {
        public $sanPoils;

        public function __construct($nom, $age, $poid, $sanPoils)
        {
            parent::__construct($nom, $age, $poid);
            $this->sanPoils =  $sanPoils;
        }

        public function aboyer()
        {
            echo "J'ai aboyé!!!";
        }
    }
    ?>
</body>

</html>