<?php

require 'Medicament.php';
require 'gestion_stock.php';
require 'gestionstock.php';

diminuerStock($medicament, 10);

echo "Nom : " . $medicament->nom . "<br>";
echo "Stock actuel : " . $medicament->quantite;
echo "Stock initial : " . $paracetamol->quantite . "<br>";
echo "<br>--- Test Etape 16 (Bug Reapprovionnement) ---<br>";
echo"Stock avant : " .
$medicament->Quantite . "
unites.<br>";
echo "Stock apres tentative(+20):" .
$medicament->quantite."
unites.<br>";
// Simulation d'une livraison de 20 unités
reapprovisionner($paracetamol, 20);

echo "Stock après livraison (+20) : " . $paracetamol->quantite . " unités.<br>";
?>
