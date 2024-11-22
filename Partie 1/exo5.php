<h2>Exercice 5<h2>


<?php

//  VARIABLE

$tauxConversion = 6.55957;
$montantFrancs = 100; 


// FONCTION

$montantEuros = $montantFrancs / $tauxConversion;
$arrondi = round($montantEuros, 2);

// AFFICHAGE

echo "Montant en francs: $montantFrancs<br>";
echo "Montant en euros: $arrondi";
