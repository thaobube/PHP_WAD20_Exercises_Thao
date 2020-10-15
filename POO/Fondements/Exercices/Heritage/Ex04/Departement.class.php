<?php

class Departement
{
    public $nom;
    public Manager $managerDePartement;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function setManagerDepartement(Manager $managerDePartement)
    {
        $this->managerDePartement =  $managerDePartement;
    }
}
