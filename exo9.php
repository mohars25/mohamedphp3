<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<?php
function bouton($elements, $nomDuGroupe) {
    foreach ($elements as $element) {
        echo '<input type="radio" name="' . $nomDuGroupe . '" value="' . $element . '">';
        echo $element . '<br>';
    }
}

$elements = array("Masculin", "Féminin", "Autre");
bouton($elements, "civilite");

