<h2>Exercice 14</h2>

<?php

$email = "elan@elan-formation.fr";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est valide.";
  } else {
      echo "L'adresse email '$email' est invalide.";
  }