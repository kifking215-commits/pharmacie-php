<?php

require_once "Medicament.php";

function diminuerStock($medicament,$quantite)
{
    $medicament->quantite -= $quantite;
}

function reapprovisionner($medicament,$quantite)
{
    $medicament->quantite -= $quantite;
}
