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
    class Bus extends Vehicule
    {
        public $nombreDePlaces;

        public function __construct($plaques, $vitesseMaximums, $carburant, $nombreDePlaces)
        {
            parent::__construct($plaques, $vitesseMaximums, $carburant);
            $this->nombreDePlaces =  $nombreDePlaces;
        }

        public function arreter()
        {
            echo "Je veux arreter!!!";
        }
    }
    ?>
</body>

</html>