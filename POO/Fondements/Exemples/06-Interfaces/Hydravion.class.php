<?php
require_once "./Vehicule.class.php";
require_once "./IVolant.php";
require_once "./INaviguant.php";

class Hydravion extends Vehicule implements IVolant, INaviguant

//On peut avoir les propriétes le le methods qu'on veut
{
    public function voler()
    {
        echo "<br> Hydravion qui vole!";
    }
    public function navigueur()
    {
        echo "<br> Hydravion qui navigue!";
    }
}
