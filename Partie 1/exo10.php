<h2>Exercice 10</h2>

<?php


// Rendue de monnaie : 10e x 4 billets, 5e x 1 billet, 2e x 1 pièce 1e x 1p
// rendre 200-152 = 48
// calcul 4*10 + 1*5 + 1*2 + 1*1


//VARIABLE

$montantAPayer = 151;
$montantVerse = 2000;
$resteAPayer = 48;


//FONCTION

$resteAPayer = intval($montantVerse - $montantAPayer);

echo "$resteAPayer<br><br>";

$billets_10 = intdiv($resteAPayer, 10);
$resteAPayer %= 10; //% (modulo) est utilisé pour calculer le reste après avoir rendu autant que possible de billets ou de pièces de cette valeur.

echo "$resteAPayer<br><br>";

$billets_5 = intdiv($resteAPayer, 5);
$resteAPayer %= 5;

echo "$resteAPayer<br><br>";

$pieces_2 = intdiv($resteAPayer, 2);
$resteAPayer %= 2;

echo "$resteAPayer<br><br>";

$pieces_1 = intdiv($resteAPayer, 1);

$resteAPayer %= 1;

echo "Reste final : $resteAPayer<br><br>";

//AFFICHAGE

echo "Montant à payer : $montantAPayer<br>";
echo "Montant versé : $montantVerse<br>";
echo "Montant à rendre : $resteAPayer<br>";


// AVEC BOUCLE FOR ET IF

// Calcul du reste à payer
$resteAPayer = intval($montantVerse - $montantAPayer);

// Affichage du reste à payer initial
echo "Reste à payer : $resteAPayer €<br><br>";

// ** Utilisation de la boucle for pour le billet de 10€ **
$billets_10 = 0;
for ($i = $resteAPayer; $i >= 10; $i -= 10) {
    $billets_10++;
    $resteAPayer -= 10;
}

echo "Billets de 10€ : $billets_10<br>";
echo "Reste après billets de 10€ : $resteAPayer €<br><br>";

// ** Utilisation des conditions if pour les autres billets et pièces **

// Billets de 5€
if ($resteAPayer >= 5) {
    $billets_5 = intdiv($resteAPayer, 5);
    $resteAPayer %= 5;
    echo "Billets de 5€ : $billets_5<br>";
    echo "Reste après billets de 5€ : $resteAPayer €<br><br>";
}

// Pièces de 2€
while ($resteAPayer >= 2) {
    $pieces_2 = intdiv($resteAPayer, 2);
    $resteAPayer %= 2;
    echo "Pièces de 2€ : $pieces_2<br>";
    echo "Reste après pièces de 2€ : $resteAPayer €<br><br>";
}

// Pièces de 1€
if ($resteAPayer >= 1) {
    $pieces_1 = intdiv($resteAPayer, 1);
    $resteAPayer %= 1;
    echo "Pièces de 1€ : $pieces_1<br>";
    echo "Reste après pièces de 1€ : $resteAPayer €<br><br>";
}

// Vérification du reste final
echo "Reste final : $resteAPayer €<br><br>";