<h2>Exercice 11</h2>

<?php



// Fonction pour formater la date en français
function formaterDateFr($dateToCome) {
    // Convertir la chaîne de caractères en objet DateTime
    $date = new DateTime($dateToCome);
    

    // Créer un objet IntlDateFormatter pour formater la date en français
    $formatter = new IntlDateFormatter(
        'fr_FR',            // Locale française
        IntlDateFormatter::GREGORIAN,
    );
    $formatter->setPattern("EEEE dd MMMM yyyy");  // Format attendu FR

    // Retourner la date formatée
    return $formatter->format($date);
}

// AFFICHAGE DE LA DATE EN CHAINE DE CARACTERES
echo "Date du 23-02-2018 convertie: " .  formaterDateFr("2018-02-23");

?>



