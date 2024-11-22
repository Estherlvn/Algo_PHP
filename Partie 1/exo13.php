<h2>Exercice 13</h2>

<?php

// VARIABLES

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9]; // notes de l'élève
$nbnotes = count($notes);                   // nombre de notes
$SommeDesNotes = array_sum($notes);         // sommes des notes

$moyenne= $SommeDesNotes / $nbnotes;



echo "La moyenne de l'élève est de : " . number_format ($moyenne, 2);

// number_format($variable, 2) permet d'afficher le résultat avec 2 décimales