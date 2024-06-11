<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
    
    $capitales = array
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.

    
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
    Affichage
    Pays Capitale
    ALLEMAGNE Berlin
    FRANCE Paris
    ITALIE Rome
    USA Washington
</p>





<?php



$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);

function tableauHTML($capitales)
{

    ksort($capitales);


    echo "<table border='1'>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>";


    foreach ($capitales as $pays => $capitale) {
        echo "<tr>";
        echo "<td>" . strtoupper($pays) . "</td>";
        echo "<td>" . $capitale . "</td>";
        echo "</tr>";
    }


    echo "</table>";
}


tableauHTML($capitales);



