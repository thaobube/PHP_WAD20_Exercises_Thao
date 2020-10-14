<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./AppareilDVD.class.php";
    class LecteurGraveurDVD extends AppareilDVD
    {
        public $vitesseEnregistrement;

        public function __construct($marque, $vitesseLecture, $vitesseEnregistrement)
        {
            //proprietes communes
            parent::__construct($marque, $vitesseLecture);
            //proprietes propres
            $this->$vitesseEnregistrement = $vitesseEnregistrement;
        }

        public function enregistrerDVD()
        {
            echo "<br> J'enregistre un DVD";
        }
    }

    ?>
</body>

</html>