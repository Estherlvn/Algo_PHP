<h2>Exercice 4<h2>


<?php


// VARIABLE
// Définition de la chaîne de caractères à vérifier

$pali = "Engage le jeu que je le gagne";

// FONCTION

// convertir la chaine en minuscule : 
$paliCheck = strtolower($pali);
// supprimer les espaces :
$paliCheck = str_replace(' ','', $paliCheck);
// inverser la chaîne de caractères :
$paliCheckRev = strrev($paliCheck);

if($paliCheck == $paliCheckRev) {
    echo "Ma phrase est un palindrome";
} else {
    echo "Ma phrase n'est pas un palindrome";
}

// if : compare la version inversée avec la version non inversée :
    
// si le match est ok alors "palindrome" sinon "pas palindrome"

// function compareStrings($pali, $paliCheck) {
// if ($pali === $paliCheck) {
//     echo "est un palindrome";
// } else {
//     echo "n'est pas un palindrome";
// }
// }


// // AFFICHAGE

// echo "La phrase: $pali, est elle un palindrome?<br>";
// echo "Cette phrase ", compareStrings($pali, $paliCheck);


// Vérifie si la chaîne est un palindrome

/****
function Palindrome($pali) {
    // Suppression des espaces dans la chaîne
    $pali = str_replace(' ', '', $pali);

    // Cas de base : Si la chaîne a une longueur de 1 ou 0, elle est automatiquement un palindrome
    if ((strlen($pali) == 1) || (strlen($pali) == 0)) {
        echo "Oui, c'est un Palindrome.\n";
        return; // On retourne pour arrêter la fonction ici
    }
    else {
        // Vérifie si les caractères aux deux extrémités sont identiques
        if (substr($pali, 0, 1) == substr($pali, strlen($pali) - 1, 1)) {
            // Appel récursif en enlevant le premier et le dernier caractère
            return Palindrome(substr($pali, 1, strlen($pali) - 2));
        }
        else {
            // Si les caractères aux extrémités ne sont pas égaux, ce n'est pas un palindrome
            echo "Non, ce n'est pas un palindrome.\n";
        }
    }
}

// Appel de la fonction pour tester si la chaîne est un palindrome
Palindrome($pali);

***/

