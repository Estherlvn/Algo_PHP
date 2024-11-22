<h2>Exercice 3</h2>


<?php

// DECLARATION DE VARIABLES

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";



// FONCTIONS
// remplacer le mot "aujourd'hui" par le mot "demain"

$chaineModifiée = str_replace("aujourd'hui","demain","$chaineDeCaracteres");



// AFFICHAGE

echo "Soit la phrase: $chaineDeCaracteres. <br>";
echo "La phrase devient: $chaineModifiée.";