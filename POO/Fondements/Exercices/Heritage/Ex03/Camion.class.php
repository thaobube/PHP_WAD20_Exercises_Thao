<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Vehicule.class.php";
    class Camion extends Vehicule
    {
        public $chargeMaximale;

        public function __construct($plaques, $vitesseMaximums, $carburant, $chargeMaximale)
        {
            parent::__construct($plaques, $vitesseMaximums, $carburant);
            $this->chargeMaximale =  $chargeMaximale;
        }

        public function decharger()
        {
            echo "Je veux decharger!!!";
        }
    }
    ?>
</body>

</html>