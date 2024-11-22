<h2>Exercice 1</h2>

<?php

$texte = "Ce texte passe en parametre";

function convertirMajRouge($texte) {
    // Convertir le texte en majuscules
    $texteMaj = strtoupper($texte);

    // Appliquer la couleur rouge au texte
    $texteRed = "<p style='color: red;'>$texteMaj</p>";

    // Retourner le texte stylisé
    return $texteRed;
}

// Appel de la fonction et affichage
echo convertirMajRouge($texte);

?>