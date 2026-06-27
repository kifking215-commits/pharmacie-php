// Étape 12 : Fonction pour diminuer le stock lors d'une vente ou d'une sortie
function diminuerStock($medicament, $quantite) {
    $medicament->quantite -= $quantite;
}

// Étape 13 : Fonction pour réapprovisionner le stock lors d'une livraison
function reapprovisionner($medicament, $quantite) {
    $medicament->quantite += $quantite;
}