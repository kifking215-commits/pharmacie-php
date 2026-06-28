<?php

require 'Medicament.php';
require 'gestionstock.php';

$medicament = new Medicament("Paracetamol", "Amoxiciline", 100, 20);
diminuerStock($medicament, 30);
echo "Nom : " . $medicament->nom . "<br>";
echo "Stock actuel : " . $medicament->quantite;
echo "Stock initial : " . $medicament->quantite . "<br>";
echo "<br>--- Test Etape 16 (Bug Reapprovionnement) ---<br>";
echo "Stock avant : " .
$medicament->quantite . "
unites.<br>";
echo "Stock apres tentative(+20):" .
$medicament->quantite . "
unites.<br>";
// Simulation d'une livraison de 20 unités
reapprovisionner($medicament, 20);

echo "Stock après livraison (+20) : " . $medicament->quantite . " unités.<br>";
?>
