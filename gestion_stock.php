<?php

include "Medicament.php";

function diminuerStock($medicament,$quantite)
{
    $medicament->quantite -= $quantite;
}

function reapprovisionner($medicament,$quantite)
{
    $medicament->quantite -= $quantite;
}
function exporterCSV($medicament)
{
    return [
        $medicament->nom,
        $medicament->quantite ,
        $medicament->seuilAlerte];
}
?>