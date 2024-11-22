<h2>Exercice 8</h2>

<?php

// VARIABLES
// version for
$nombre = 8;

for ($i=1; $i <= 10; $i++) { 
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat<br>";
}

// version while

$nombre = 9;
$i = 1;

while ($i <= 10) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat<br>";
    $i++;
}




// FONCTIONS
// function generateMultiplicationTable($nombre) {
//     $tableau = array();

//     // Boucle pour calculer la table de multiplication de 1 à 10
//     for ($i = 1; $i <= 10; $i++) {
//         $resultat = $nombre * $i;
//         $tableau[$i] = "$nombre x $i = $resultat";
//     }

//     return $tableau;
// }

// // AFFICHAGE
// echo "Table de multiplication de $nombre :<br>";

// $multiplicationTable = generateMultiplicationTable($nombre);

// foreach ($multiplicationTable as $line) {
//     echo $line . "<br>";
// }
?>
