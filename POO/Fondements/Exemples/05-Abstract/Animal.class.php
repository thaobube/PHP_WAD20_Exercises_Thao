<?php

abstract class Animal
{
    public $nom;
    public $poids;

    public function respier()
    {
        echo "<br>Vie l'air frais";
    }
    public function manger()
    {
        echo "<br>Miam miam on mange";
    }
    public abstract function cri();
    public function __construct($nom, $poids)
    {
        $this->nom = $nom;
        $this->poids = $poids;
    }
}
