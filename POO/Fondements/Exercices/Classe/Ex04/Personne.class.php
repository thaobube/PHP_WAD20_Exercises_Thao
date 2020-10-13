<?php
//4. Rajoutez l'état civil à la classe précédant ainsi que les méthodes pour l'accéder

class Personne
{
    private $nom;
    private $prenom;
    private $etatCivil;

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;
    }
}
