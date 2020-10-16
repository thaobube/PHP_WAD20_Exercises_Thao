<?php
require_once "./Animal.class.php";

class Chat extends Animal
{
    public function __construct($nom, $poids)
    {
        parent::__construct($nom, $poids);
    }

    public function grifer()
    {
        echo "<br>Je fais de griffes!";
    }
    public function cri()
    {
        echo "<br>Miau miau miau";
    }
}
