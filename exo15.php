<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.
    Affichage
    L’adresse elan@elan-formation.fr est une adresse e-mail valide
    L’adresse contact@elan est une adresse e-mail invalide</p>

<?php

$mail1 = "elan@elan-formation.fr";
$mail2 = "contact@elan";

if (filter_var($mail1, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse " . $mail1 . " mail valide.<br/>";
} else {
    echo "L'adresse " . $mail1 . " mail invalide.<br/>";
}
if (filter_var($mail2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse " . $mail2 . " mail valide.<br/>";
} else {
    echo "L'adresse " . $mail2 . " mail invalide.<br/>";
}
