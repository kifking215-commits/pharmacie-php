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
?>

function exporterStockCSV($stock, $nomFichier = "export_stock.csv") {
    $fichier = fopen($nomFichier, "w");
    fputcsv($fichier, ["Nom", "Quantite", "Seuil Alerte"]);
    foreach ($stock as $medicament) {
        fputcsv($fichier, [
            $medicament['nom'], 
            $medicament['quantite'], 
            $medicament['seuil_alerte']
        ]);
    }
    
    fclose($fichier);
}
