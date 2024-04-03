<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modele, nbPortes et
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
    véhicule.
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
    suivants :
    Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.</p>

<?php

class Voiture
{



    private string $marque;
    private string $modele;
    private int $nbPortes;

    private int $vitesseActuelle;
    private bool $start;
    //prendre int pour des nombres
    public function __construct(string $marque, string $modele, int $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;

        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->start = false;

    }




    public function demarrer()
    {
        if ($this->start == false) {
            $this->start = true;
            echo "Le véhicule $this->marque $this->modele démarre<br>";
        }
    }






    public function accelerer(int $vitesse)
    {
        if ($this->start == true) {
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule $this->marque $this->modele accélère de $this->vitesseActuelle km / h<br>";
        } else {
            echo "Le véhicule $this->marque $this->modele accélère de $vitesse<br>";
            echo "Pour accélerer, il faut démarrer le véhicule $this->marque $this->modele<br>";
        }
    }

    public function stopper()
    {
        if ($this->start == true) {
            $this->start = false;
            $this->vitesseActuelle = 0;
            echo "Le véhicule $this->marque $this->modele est stoppé<br>";
        }
    }

    public function ralentir($vitesse)
    {
        if ($this->start == true && $this->vitesseActuelle > 0) {
            $this->vitesseActuelle -= $vitesse;
            echo "Le véhicule $this->marque $this->modele ralenti sa vitesse passe a $this->vitesseActuelle km / h<br>";
        }
    }

    public function vitesseCheck()
    {
        echo "La vitesse du véhicule $this->marque $this->modele est de : $this->vitesseActuelle km / h<br>";
    }
    public function information()
    {

        echo "<br>Infos véhicule  <br>  ";
        echo " Nom et modele du véhicule : $this->marque $this->modele<br>";
        echo "Nombre de portes : $this->nbPortes <br>";
        echo $this->start == true ? "Le véhicule $this->marque est démarré<br>" : "Le véhicule $this->marque est à l'arrêt<br>";
        echo "Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br>";
    }

    public function __toString()
    {
        return "$this->marque $this->modele $this->nbPortes<br>";
    }



}



$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->ralentir(10);
$v1->vitesseCheck();
$v2->vitesseCheck();

$v1->information();
$v2->information();










// for ($i = 0) {
// $numero = $i + 1;


// }
//






















// class Voiture
// {
// private $marque;
// private $modele;
// private $Portes;
// private $vitesseActuelle;

// public function __construct($marque, $modele, $Portes)
// {
// $this->marque = $marque;
// $this->modele = $modele;
// $this->Portes = $Portes;
// $this->vitesseActuelle = 0;
// }





// public function demarrer()
// {
// echo "La voiture $this->marque $this->modele démarre.<br>";
// }

// public function accelerer()
// {
// $this->vitesseActuelle += 0;
// echo "La voiture $this->marque $this->modele accélère, vitesse actuelle : $this->vitesseActuelle km/h.<br>";
// }



// public function stopper()
// {
// $this->vitesseActuelle = 0;
// echo "La voiture $this->marque $this->modele s'arrête, vitesse actuelle : $this->vitesseActuelle km/h.<br>";
// }

// public function ralentir($vitesse)
// {
// $this->vitesseActuelle -= $vitesse;
// if ($this->vitesseActuelle < 0) { // $this->vitesseActuelle = 0;
// }
// echo "La voiture $this->marque $this->modele ralentit, vitesse actuelle : $this->vitesseActuelle km/h.<br>";
// }

// public function info()
// {
// echo "Voiture : $this->marque $this->modele, Nombre de portes : $this->Portes, Vitesse actuelle :
// $this->vitesseActuelle km/h<br>";
// // }




// // }


// // echo "le vehicule est demarrer";

// // $v1 = new Voiture("Peugeot", "408", 5);
// // $v2 = new Voiture("Citroën", "C4", 3);

// // $v1->demarrer();
// // $v1->accelerer();

// // $v1->ralentir(0);

// // $v1->info();


// // $v2->demarrer();
// // $v2->accelerer();
// // $v2->stopper();
// // $v2->info();