<h2>Exercice 7</h2>

<?php

// Tableau associatif
$elements = [
    "Choix 1" => false,
    "Choix 2" => false,
    "Choix 3" => false
];

// Fonction pour générer des cases à cocher à partir d'un tableau associatif
function genererCheckbox($elements) {
    $htmlCheckbox = ''; // Initialiser une variable pour contenir le HTML généré
    foreach ($elements as $label => $checked) {
        // Vérifier si la case doit être cochée (si la valeur est true)
        $checkedAttribute = $checked ? 'checked' : '';
        
        // Construire le HTML pour chaque case à cocher avec son label
        $htmlCheckbox .= '<div>';
        $htmlCheckbox .= '<input type="checkbox" name="' . $label . '" ' . $checkedAttribute . '> ';
        $htmlCheckbox .= '<label for="' . $label . '">' . $label . '</label>';
        $htmlCheckbox .= '</div>';
    }
    return $htmlCheckbox; // Retourner le HTML généré
}

// Appeler la fonction et afficher le résultat
echo genererCheckbox($elements);

?>
