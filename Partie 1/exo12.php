<h2>Exercice 12</h2>

<?php

// TABLEAU ASSOCIATIF
// clé (key) -> valeur (value)    la clé doit être unique



// Déclaration du tableau des personnes avec leurs codes de pays
$personnes = [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];

// Déclaration du tableau des pays avec les salutations correspondantes
$pays = [
    "FRA" => "Salut",
    "ESP" => "Hola",
    "ENG" => "Hello",
];

// Boucle pour parcourir le tableau des personnes
ksort($personnes); // Trier l'affichage du prénom des personnes par ordre alphabétique
foreach ($personnes as $prenom => $codePays) {
    // Utilisation du code du pays pour trouver la salutation
    echo $pays[$codePays] . ' ' . $prenom . "<br>"; // Affichage du prénom et du message de salutation
}

// Utilisation du (.) pour concaténer les éléments

// EN utilisant la fonction SWITCH

ksort($personnes);
foreach ($personnes as $prenom => $codePays) {
    $salutation = "";
    switch ($codePays) {
        case "FRA":
            $salutation = "Salut";
            break;
        case "ESP":
            $salutation = "Hola";
            break;
        case "ENG" :
            $salutation = "Hello";
            break;
        default:
            $salutation = "Bonjour";
    }

echo "<br>" . $salutation . " " . $prenom . "<br>";
}

