<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
Affichage
Pays Capitale Lien wiki
ALLEMAGNE Berlin Lien
ESPAGNE Madrid Lien
FRANCE Paris Lien
ITALIE Rome Lien
USA Washington Lien</p>


<?php


$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);

function afficherTableHTML($capitales) {
   
    asort($capitales);

    echo "<table border='1'>";
    echo "<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";

 
    foreach ($capitales as $pays => $capitale) {
        echo "<tr>";
        echo "<td>" . strtoupper($pays) . "</td>";
        echo "<td>" . $capitale . "</td>";
       
        echo "<td><a href='https://fr.wikipedia.org/wiki/" . $capitale . "' target='_blank'>Lien</a></td>";
        echo "</tr>";
    }

   
    echo "</table>";
}


afficherTableHTML($capitales);

