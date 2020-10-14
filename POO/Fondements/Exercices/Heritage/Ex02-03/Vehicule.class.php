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

    class Vehicule
    {
        public $plaques;
        public $vitesseMaximums;
        public $carburant;

        public function __construct($plaques, $vitesseMaximums, $carburant)
        {
            $this->plaques =  $plaques;
            $this->vitesseMaximums =  $vitesseMaximums;
            $this->carburant =  $carburant;
        }

        protected function ravitailler() //refuel
        {
            echo "Je veux ravitailler!!!";
        }
    }
    ?>
</body>

</html>