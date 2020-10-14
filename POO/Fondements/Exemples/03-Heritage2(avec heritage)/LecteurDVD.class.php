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

    class LecteurDVD extends AppareilDVD
    {
        public function __construct($marque, $vitesseLecture)
        {
            parent::__construct($marque, $vitesseLecture);
        }
    }

    ?>
</body>

</html>