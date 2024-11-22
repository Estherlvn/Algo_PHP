<h2>Exercice 11</h2>

<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"]; //initialise le tableau avec les marques
$nbmarques = count($marques); // compte le nombre de marques dans le tableau


echo "Nombre de marques dans le tableau : $nbmarques<br><br>";

foreach ($marques as $valeur)
echo $valeur, ' <br>';


