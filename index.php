<?php

require 'Medicament.php';
require 'gestion_stock.php';
require 'gestionstock.php';

$medicament = new Medicament("Paracétamol", 100, 20);

diminuerStock($medicament, 10);

echo "Nom : " . $medicament->nom . "<br>";
echo "Stock actuel : " . $medicament->quantite;

echo "<br>--- Test Etape 16 (Bug Reapprovionnement) ---<br>";
echo"Stock avant : " .
$medicament->Quantite . "
unites.<br>";
echo "Stock apres tentative(+20):" .
$medicament->quantite."
unites.<br>";
?>
