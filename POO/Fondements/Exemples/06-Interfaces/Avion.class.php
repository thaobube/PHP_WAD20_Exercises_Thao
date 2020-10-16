<?php
require_once "./Vehicule.class.php";
require_once "./IVolant.php";

class Avion extends Vehicule implements IVolant

//On peut avoir les propriétes le le methods qu'on veut
{
    public function voler()
    {
        echo "<br> Avion qui vole!";
    }
}
