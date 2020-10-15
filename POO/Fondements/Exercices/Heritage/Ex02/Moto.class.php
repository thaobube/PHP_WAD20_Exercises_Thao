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
    class Moto extends Vehicule
    {
        public $couleur;
        public $marque;

        public function __construct($plaques, $vitesseMaximums, $carburant, $couleur, $marque)
        {
            parent::__construct($plaques, $vitesseMaximums, $carburant);
            $this->couleur =  $couleur;
            $this->marque =  $marque;
        }

        public function accelerer()
        {
            echo "Je veux accelerer!!!";
        }
    }
    ?>
</body>

</html>