<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et
    une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
    de validation (submit).</p>

<?php

function afficherInput($nomsInput)
{
    foreach ($nomsInput as $nom) {
        echo "<label for='" . htmlspecialchars(strtolower($nom)) . "'>" . htmlspecialchars($nom) . ":</label><br>";
        echo "<input type='text' id='" . htmlspecialchars(strtolower($nom)) . "' name='" . htmlspecialchars(strtolower($nom)) . "'><br><br>";
    }
}

echo "<form action='#' method='post'>";


afficherInput(["Nom", "Prénom", "Ville"]);


echo "<label for='email'>Adresse e-mail:</label><br>";
echo "<input type='email' id='email' name='email'><br><br>";


echo "<label>Sexe:</label><br>";
echo "<input type='radio' id='homme' name='sexe' value='Homme'>";
echo "<label for='homme'>Homme</label><br>";
echo "<input type='radio' id='femme' name='sexe' value='Femme'>";
echo "<label for='femme'>Femme</label><br><br>";


echo "<label for='formation'>Intitulé de formation:</label><br>";
echo "<select id='formation' name='formation'>";
echo "<option value='Développeur Logiciel'>Développeur Logiciel</option>";
echo "<option value='Designer web'>Designer web</option>";
echo "<option value='Intégrateur'>Intégrateur</option>";
echo "<option value='Chef de projet'>Chef de projet</option>";
echo "</select><br><br>";


echo "<input type='submit' value='Soumettre'>";


echo "</form>";

