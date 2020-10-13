<?php
//2. Pour la classe Personne il nous manque les méthodes pour lire/modifier la propriété « prenom ». Créez-les et testez-les!

class Personne
{
    private $nom;
    private $prenom;

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    // public function getPrenom()
    // {
    //     return $this->prenom;
    // }
    // public function setPrenom($prenom)
    // {
    //     $this->prenom = $prenom;
    // }
}
