<h2>Exercice 10</h2>

<h3>Formulaire complet</h3>

<?php

// CHAMPS DE TEXTE

$nomsInput = [
    "Nom" => "text", 
    "Prénom" => "text",
    "Adresse e-mail" => "email",
    "Ville" => "text",
    "Sexe" => "text"
];

function afficherInput($nomsInput) {
    $resultat = "";
    foreach ($nomsInput as $nomInput => $type) {
        $resultat .= "$nomInput<br><input type='$type' name='$nomInput'><br>";
         // Ajouter un saut de ligne supplémentaire après le champ "Sexe"
         if ($nomInput === "Sexe") {
            $resultat .= "<br>";
        }
    }
    return $resultat;
}

// LISTE DE CHOIX

$elements = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"]; 

function alimenterListeDeroulante($elements){
    $resultat = "<select name='name'>";
    foreach ($elements as $element) {
        $resultat .= "<option value='$element'>" . $element . "</option>";
    }
    $resultat .= "</select>";
    return $resultat;
}


// BOUTON SUBMIT

function afficherFormulaire($nomsInputs, $elements) {
    $result = "<form>";
    $result .= afficherInput($nomsInputs);
    $result .= alimenterListeDeroulante($elements);
    $result .= "</form>";
 
   return $result;
}


// AFFICHAGE AVEC UN SEUL ECHO POUR TOUTE LA PAGE
echo afficherFormulaire($nomsInput, $elements);