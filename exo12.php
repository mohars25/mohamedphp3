<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
    Soit le tableau suivant :
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
    Affichage
    bool(true)
    string(5) "texte"
    int(10)
    float(25.369)
    array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</p>

<?php

$tablValeurs = array(true, "texte", 10, 25.369, array("valeur1", "valeur2"));
// le "as" permet de faire un alias !!!!
foreach ($tablValeurs as $valeur) {
    var_dump($valeur);
    echo "<br>";
}

