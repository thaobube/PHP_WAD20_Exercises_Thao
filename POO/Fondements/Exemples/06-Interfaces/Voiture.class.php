<?php
require_once "./Vehicule.class.php";
require_once "./IRoulant.php";

class Voiture extends Vehicule implements IRoulant

//On peut avoir les propriétes le le methods qu'on veut
{
    public function rouler()
    {
        echo "<br> Je suis une voiture qui roule!";
    }
}
