<h2>Exercice 2</h2>

<?php

// DECLARATION D'UN TABLEAU ASSOCIATIF
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

// Trier par ordre alphabétique
ksort($capitales);

// Définition de la fonction pour afficher le tableau en HTML
function afficherTableHTML($capitales) {
    // Début de la table HTML
    echo "<table border='1'; width: 50%; text-align: left;'>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>"; // Entêtes de la table

    // Parcourir le tableau et remplir les lignes
    foreach ($capitales as $pays => $ville) {
        // Convertir le nom du pays en majuscules
        $pays = strtoupper($pays);
        echo "<tr><td>$pays</td><td>$ville</td></tr>";
    }

    // Fin de la table
    echo "</table>";
}

// Appel de la fonction pour afficher le tableau
afficherTableHTML($capitales);

?>


<!---- Autre version du tableau 

<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        <tr>
    </thead>

    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
</tbody>

---->



