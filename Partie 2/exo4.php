<h2>Exercice 4</h2>

<?php
// Tableau des pays, capitales et liens
$paysData = [
    ["pays" => "France", "capitale" => "Paris", "lien" => "https://fr.wikipedia.org/wiki/Paris"],
    ["pays" => "Allemagne", "capitale" => "Berlin", "lien" => "https://fr.wikipedia.org/wiki/Berlin"],
    ["pays" => "USA", "capitale" => "Washington", "lien" => "https://fr.wikipedia.org/wiki/Washington_(district_de_Columbia)"],
    ["pays" => "Italie", "capitale" => "Rome", "lien" => "https://fr.wikipedia.org/wiki/Rome"],
    ["pays" => "Espagne", "capitale" => "Madrid", "lien" => "https://fr.wikipedia.org/wiki/Madrid"]
];

// Trier les données par pays (ordre alphabétique)
usort($paysData, function($a, $b) {
    return strcmp($a['pays'], $b['pays']);  // strcmp compare les pays par ordre a, b ...
});

?>

<table border="1">
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Wikipédia</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($paysData as $data): ?>
            <tr>
                <!-- Convertir le pays en majuscules avec strtoupper() -->
                <td><?php echo strtoupper($data['pays']); ?></td>
                <td><?php echo $data['capitale']; ?></td>
                <td><a href="<?php echo $data['lien']; ?>" target="_blank">Lien</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>







<!---  TABLEAU HTML

<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Wikipédia</th>
        <tr>
    </thead>

    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
            <td><a href="https://fr.wikipedia.org/wiki/Paris" target="_blank">Lien</a></td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
            <td><a href="https://fr.wikipedia.org/wiki/Berlin" target="_blank">Lien</a></td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
            <td><a href="https://fr.wikipedia.org/wiki/Washington_(district_de_Columbia)" target="_blank">Lien</a></td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
            <td><a href="https://fr.wikipedia.org/wiki/Rome" target="_blank">Lien</a></td>
            
        </tr>
        <tr>
            <td>Espagne</td>
            <td>Madrid</td>
            <td><a href="https://fr.wikipedia.org/wiki/Madrid" target="_blank">Lien</a></td>
    </tr>

</tbody>

--->