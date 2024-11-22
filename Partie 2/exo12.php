<h2>Exercice 12</h2>


<?php

// Définir le tableau avec des valeurs de différents types
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];

// Boucle à travers chaque élément du tableau
foreach ($tableauValeurs as $valeur) {
    // Afficher les informations de chaque variable avec var_dump et ajouter un retour à la ligne
    var_dump($valeur);
    echo "<br>"; // Ajouter un retour à la ligne
}

?>
