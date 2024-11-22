<h2>Exercice 9</h2>

<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function genererRadio($nomsRadio) {
    $htmlRadio = ''; // Initialiser une variable pour contenir le HTML généré
    foreach ($nomsRadio as $valeur) {
        // Construire le HTML pour chaque bouton radio
        $htmlRadio .= '<input type="radio" name="genre" value="' . $valeur . '">' . $valeur . '<br>';
    }
    return $htmlRadio; // Retourner le HTML généré
}

// Appeler la fonction et afficher le résultat
echo genererRadio($nomsRadio);

?>
