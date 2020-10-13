<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1. simple, pas get ni set ni constructeur
    class Personne
    {
        public $nom;
        public $prenom;
    }
    $p1 = new Personne();
    $p1->nom = "Liu";
    $p1->prenom = "Lucy";
    var_dump($p1);

    //2. simple, sans constructeur mais avec get et set
    class PersonneGS
    {
        public $nom;
        public $prenom;
        public function getNom()
        {
        }
        public function setNom()
        {
        }
        public function getPrenom()
        {
        }
        public function setPrenom()
        {
        }
    }

    ?>
</body>

</html>