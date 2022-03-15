<h1>Algorithmes PHP n°2 Exo 14</h1>

<?php
//Exo 14
/*
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi 
qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui 
a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); 
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
*/
// declaration de variables:

class Voiture{
    protected $marque;
    protected $modele;
	// creer une instance => construire  initalisé la valeur des instances
	public function __construct($marque, $modele){// 2 underscore (methode magique 
		$this->marque=$marque; // objet sur lequel je suis entrain de travaillé
		$this->modele=$modele;
	}
    //getteur
    public function getMarque(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->marque;
    }
    public function getModele(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->modele;
    }
    //setteur
    public function setMarque($val){ //getteur setteur modifie la valeur de lattribut d'un objet 
        $this->marque=$val;
    }
    public function setModele($val){ //getteur setteur modifie la valeur de lattribut d'un objet 
        $this->modele=$val;
    }
    public function getInfos(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        echo "Marque: ".$this->marque;
        echo "<br/>";
        echo "Modele: ".$this->modele;
        echo "<br/>";

    }
}
class VoitureElec extends Voiture{
    private $autonomie;
	// creer une instance => construire  initalisé la valeur des instances
	public function __construct($marque,$modele,$autonomie){// 2 underscore (methode magique) 
		parent::__construct($marque,$modele,$autonomie);
        $this->autonomie=$autonomie; // objet sur lequel je suis entrain de travaillé
	}
    //getteur
    public function getAutonomie(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->autonomie;
    }
    //setteur
    public function setAutonomie($val){ //mutateur setteur modifie la valeur de lattribut d'un objet 
        $this->autonomie=$val;
    }
    public function getInfos(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        echo "Marque: ".$this->marque;
        echo "<br/>";
        echo "Modele: ".$this->modele;
        echo "<br/>";
        echo "Autonomie: ".$this->autonomie."Ah";
        echo "<br/>";
    }
}
$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);
echo "Voiture<br/>";
echo $v1->getInfos();
echo "<br/>";
echo "Voiture Electrique<br/>";
echo $ve1->getInfos();
echo "<br/>";
//var_dump($ve1);
?>
