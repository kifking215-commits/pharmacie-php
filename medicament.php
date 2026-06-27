<?php

class Medicament {
    public $nom;
    public $quantite;
    public $seuilAlerte;

    public function __construct($nom, $quantite, $seuilAlerte) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->seuilAlerte = $seuilAlerte;
    }
}

?>