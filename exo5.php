<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>

<?php


function afficherInput($nomsInput) {
    echo "<form action='#' method='post'>";

    foreach ($nomsInput as $nom) {
      
        echo "<label for='" . htmlspecialchars(strtolower($nom)) . "'>" . htmlspecialchars($nom) . ":</label><br>";
        echo "<input type='text' id='" . htmlspecialchars(strtolower($nom)) . "' name='" . htmlspecialchars(strtolower($nom)) . "'><br><br>";
    }

    echo "<input type='submit' value='Soumettre'>";
    echo "</form>";
}


$nomsInput = array("Nom", "Prénom", "Ville");
afficherInput($nomsInput);

?>






