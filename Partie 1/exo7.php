<h2>Exercice 7</h2>


<?php


// FONCTIONS
// avec fonction par âge décroissant

$age = 10;
$categorie = determineCategorie($age);

function determineCategorie($age) {
    if ($age >= 12) {
        return "Cadet";
    } elseif ($age >= 10) {
        return "Minime";
    } elseif ($age >= 8) {
        return "Pupille";
    } elseif ($age >= 6) {
        return "Poussin";
    } else {
        return "Merci d'entrer un âge valide.";
    }
}

echo "L'enfant qui a $age ans appartient à la catégorie des $categorie.";



/*

// avec fonction par tranche d'âge

$age = 10;
$category = determineCategory($age);

function determineCategory(int $age) {
    if($age >= 6 && $age <= 7) {
     return "Poussin";
    } elseif ($age >= 8 && $age <= 9 ) {
     return "Pupille";
    } elseif ($age >= 10 && $age <= 11) {
      return "Minime"; 
    } elseif ($age >= 12) {
    return "Cadet";
    } else {
     return "Merci de préciser la catégorie.";
    }
}

// AFFICHAGE

echo "L'enfant qui a $age ans appartient à la catégorie des $category.";

*/