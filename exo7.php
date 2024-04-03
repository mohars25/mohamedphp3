<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<?php

function bouton($elements, $nomDuGroupe)
{
    foreach ($elements as $element) {
        echo '<input type="checkbox" name="' . $nomDuGroupe . '" value="' . $element . '">';
        echo $element . '<br>';
    }
}

$elements = array("Choix 1", "Choix 2", "Choix 3");
bouton($elements, "");