<h2>Exercice 6</h2>


<?php

// VARIABLES

$nbArticles = 5;
$prixHT = 9.99;
$tauxTVA = 0.20;


// FONCTIONS

$totalHT = $nbArticles * $prixHT;

$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);

$arrondi = round($totalTTC, 2);

// AFFICHAGE

echo "Nombre d'articles: $nbArticles. <br>";
echo "Prix unitaire: $prixHT. <br>";
echo "Taux de TVA: $tauxTVA. <br>";
echo "Montant de la facture hors taxe: $totalHT euros. <br>";
echo "Montant de la facture TTC: $arrondi euros.";