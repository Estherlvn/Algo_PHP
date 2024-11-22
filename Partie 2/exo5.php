<h2>Exercice 5</h2>
 
<?php
 
// Notre array de départ avec les entêtes des inputs

$nomsInput = [

    "Nom", 

    "Prénom", 

    "Ville"

];
 
echo afficherInput($nomsInput);
 
// Notre fonction qui va sélectionner chaque élément du tableau pour ensuite lui ajouter un input type text

function afficherInput($nomsInput){

    $resultat = "";

    foreach ($nomsInput as $nomInput) {

        $resultat .= $nomInput."<br>"."<input type='text' name='$nomInput'><br>";
 
    }

    return $resultat;

}
 

/*
// VARIABLES
$nomsInput = ["Nom", "Prénom", "Ville"];



// FONCTION
function afficherInput($nomsInput) {
    // Méthode "post" pour le transfert sécurisé des données vers BDD
    // Attribut "action" pour spécifier l'URL vers lequel sont envoyées les requêtes lors de la soummission du formulaire
    echo '<form method="post" action="#">';  

    foreach ($nomsInput as $text) {
        $nomInput = strtolower($text);
        // Intégrer HTML pour les champs du formulaire
        echo '<div>';
        echo '<label for="' . $nomInput . '">' . $text . ':</label>' . '<br>';
        echo '<input type="text" id="' . $nomInput . '" name="' . $nomInput . '">';
        echo '</div>';
    }

    echo '<input type="submit" value="Envoyer">';
    echo '</form>';
}


// AFFICHAGE
afficherInput($nomsInput);

?>


*/