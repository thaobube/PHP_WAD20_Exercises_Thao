<?php
//3. Rajoutez une méthode afficher() dans la classe Personne qui affiche le texte suivant:
//  "Je suis une personne et je m'appelle <prenom><nom>!!"

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
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
}
