<?php
function diminuerStock($medicament, $quantiteVendue) {
    if ($quantiteVendue <= 0) {
        echo "La quantité vendue doit être supérieure à zéro.<br>";
        return;
    }

    if ($quantiteVendue > $medicament->quantite) {
        echo "Stock insuffisant pour la vente de " . $quantiteVendue . " unités de " . $medicament->nom . ".<br>";
        return;
    }

    $medicament->quantite -= $quantiteVendue;

    if ($medicament->quantite < $medicament->seuilAlerte) {
        echo "Alerte : Le stock de " . $medicament->nom . " est inférieur au seuil d'alerte (" . $medicament->seuilAlerte . ").<br>";
    }
}