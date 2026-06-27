<?php

require 'Medicament.php';
require 'gestion_stock.php';

// Création d'un médicament
$medicament = new Medicament("Paracétamol", 100, 20);

// Vente de 10 unités
diminuerStock($medicament, 10);

// Affichage du stock
echo "Nom : " . $medicament->nom . "<br>";
echo "Stock actuel : " . $medicament->quantite;

// Fin du script
?>