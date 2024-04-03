<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
    qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
    suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    echo $v1->getInfos()."<br />";
    echo $ve1->getInfos()."<br />";
</p>

<?php

class Voiture
{

    // // Déclarons une constante public
    // public const MY_PUBLIC = 'public';

    // // Déclarons une constante protégée
    // protected const MY_PROTECTED = 'protected';

    // // Déclarons une constante privée
    // private const MY_PRIVATE = 'private';

    protected $marque;
    protected $modele;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }
    public function getInfos()
    {
        return "Marque : " . $this->marque . ", Modèle : " . $this->modele;
    }
}
class VoitureElec extends Voiture
{
    private $autonomie;

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }
    public function getInfos()
    {
        return parent::getInfos() . ", autonomie : " . $this->autonomie . " km";
    }
}
$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);


echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";

