<?php
//1. Créez une classe CompteBancaire qui contient les informations et les opérations basiques d'un compte bancaire. Il faut pouvoir obtenir le solde du compte, enlever et rajouter un montant d'argent. On peut aussi bloquer et débloquer le compte

class CompteBancaire
{
    private $solde = 0;
    private $ligneDeCredit;
    public $numeroDeCompte;
    //public $titulaire;
    public $isBloque = false;

    public function getSolde()
    {
        return $this->solde;
    }
    private function setSolde($solde)
    {
        if ($solde < $this->ligneDeCredit) {
            $this->solde = $solde;
        }
    }
    public function getLigneDeCredit()
    {
        return $this->ligneDeCredit;
    }
    public function setLigneDeCredit($ligneDeCredit)
    {
        if ($ligneDeCredit > 0) {
            $this->ligneDeCredit = $ligneDeCredit;
        } else {
            echo ("La ligne de Credit ne peut pas negative");
        }
    }
    public function getIsBloque()
    {
        return $this->isBloque;
    }
    public function setIsBloque($isBloque = false)
    {
        $this->isBloque = $isBloque;
    }

    public function Rajouter($montant)
    {
        if ($this->isBloque === false) {
            $this->solde += $montant;
        } else {
            echo ("La compte est bloque");
        }
    }
    public function Enlever($montant)
    {
        if ($this->isBloque === false) {
            if ($montant <= $this->solde + $this->ligneDeCredit) {
                $this->solde -= $montant;
            } else {
                echo ("Le montant retiré est plus superieur que la ligne de credit");
            }
        } else {
            echo ("La compte est bloque");
        }
    }
}
