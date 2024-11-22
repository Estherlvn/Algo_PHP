<h2>Exercice 8</h2>

<?php

// VARIABLES

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nombre = 4;

// Fonction pour afficher l'image plusieurs fois en fonction de la valeur de $nombre
function repeterImage($url, $nombre) {
    // Utilisation d'une boucle pour répéter l'affichage de l'image
// $i=0 est l'index de la boucle / $i < $nombre  dit que la boucle continue tant que $i inférieur à $nombre / $i++ incrémente $i de 1
    for ($i = 0; $i < $nombre; $i++) {

        // Affiche l'image
        echo '<img src="' . $url . '" alt="Image chien avec une tongue" /> ';
    }
}

// Affichage
repeterImage($url, $nombre);

?>
