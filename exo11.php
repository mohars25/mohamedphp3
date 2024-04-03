<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.
    Exemple :
    formaterDateFr("2018-02-23");
    Affichage
    vendredi 23 février 2018</p>

<?php



setlocale(LC_TIME, 'fr_FR');

date_default_timezone_set('Europe/Paris');

$date1 = "2023-03-15";

// Afficher date du jour en français

$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

echo ucfirst($formatter->format(date_create($date1))) . "<br>";



















// function datefr()
// {
//     $mois = array(
//         "Janvier",
//         "Fevrier",
//         "Mars",
//         "Avril",
//         "Mai",
//         "Juin",
//         "Juillet",
//         "Août",
//         "Septembre",
//         "Octobre",
//         "Novembre",
//         "Decembre"
//     );
//     $jours = array(
//         "Dimanche",
//         "Lundi",
//         "Mardi",
//         "Mercredi",
//         "Jeudi",
//         "Vendredi",
//         "Samedi"
//     );
//     return $jours[date("w")] . " " . date("j") . (date("j") == 1 ? "er" : " ") .
//         $mois[date("n") - 1] . " " . date("Y");
// }

// echo datefr();

