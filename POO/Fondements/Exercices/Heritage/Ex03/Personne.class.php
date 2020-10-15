<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


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