<?php

require 'Medicament.php';
require 'gestion_stock.php';

$medicament = new Medicament("Paracétamol", 100, 20);

diminuerStock($medicament, 10);

echo "Nom : " . $medicament->nom . "<br>";
echo "Stock actuel : " . $medicament->quantite;

?>