<h2>Exercice 9</h2>

<?php

// VARIABLES

$age = 32; 
$sexe = "F";


// FONCTIONS

function situationFiscale($age, $sexe) {

    if ($age >= 18 && $age <= 35 && $sexe == "F" || ($sexe == "M" && $age > 20)) {
        return "imposable";
    } else {
        return "non imposable";
    }
}

// Assignation de la situation fiscale
$situation = situationFiscale($age, $sexe);

// Affichage des informations
echo "Age : $age<br> Sexe : $sexe<br> Situation fiscale : $situation";
?>
