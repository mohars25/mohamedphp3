<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE
</p>

<?php

function rouge($texte) {
    $texte = mb_strtoupper($texte);
    echo '<span style="color: red;">' . $texte . '</span>';
}

$texte = "mon texte en paramètre";
rouge($texte);



