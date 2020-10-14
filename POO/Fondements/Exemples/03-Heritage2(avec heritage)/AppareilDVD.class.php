<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class AppareilDVD
    {
        public $marque;
        public $vitesseLecture;

        public function __construct($marque, $vitesseLecture)
        {
            $this->marque = $marque;
            $this->vitesseLecture = $vitesseLecture;
        }
    }
    ?>
</body>

</html>