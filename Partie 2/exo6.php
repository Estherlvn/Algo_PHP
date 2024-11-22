<h2>Exercice 6</h2>


<?php

// Variables
$elements = ["Monsieur", "Madame", "Mademoiselle"]; // Initialisation du tableau

function alimenterListeDeroulante($elements){
    $resultat = "<select name='name'>";
    foreach ($elements as $element) {
        $resultat .= "<option value='$element'>" . $element . "</option>";
    }
    $resultat .= "</select>";
    return $resultat;
}

// Appeler la fonction et afficher le résultat
echo alimenterListeDeroulante($elements);

?>


<!-- Autre version, fonctionne mais moins conforme
 
<!DOCTYPE html>
<head>
    <title>Formulaire avec Liste Déroulante</title>
</head>

<body>

<h2>Formulaire avec Liste Déroulante</h2>

-----PHP-------

// Variables
$elements = ["Monsieur", "Madame", "Mademoiselle"]; // Initialisation du tableau


// Fonction pour remplir la liste déroulante à partir d'un tableau et lui ajouter un select pour en faire une liste déroulante
function alimenterListeDeroulante($elements) {
    echo '<select name="civilite" id="civilite">';
    
    // Boucle sur chaque élément du tableau et crée une option pour chaque valeur
    foreach ($elements as $element) {
        echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
    }
    
    echo '</select>';
}


// Appel de la fonction pour afficher la liste déroulante
alimenterListeDeroulante($elements);

------PHP-----

</body>
</html> -->
