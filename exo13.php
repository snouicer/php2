<h1>Algorithmes PHP n°2 Exo13 </h1>
<?php
//Exo 13
/*
Créer une classe Voiture possédant les propriétés suivantes :
marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes
demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. 
La vitesse initiale de chaque véhicule instancié est de 0. 
Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1 ➔ "Peugeot","408",5 v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :
*/
// declaration de variables:
class Voiture{
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $statut;
	// creer une instance => construire  initalisé la valeur des instances
	public function __construct($marque, $modele,$nbPortes){// 2 underscore (methode magique) 
		$this->marque=$marque; // objet sur lequel je suis entrain de travaillé
		$this->modele=$modele;
        $this->nbPortes=$nbPortes;
        $this->vitesseActuelle=0;
        $this->statut=false;// objet creer aura cette valeur par defaut
	}
    //getteur
    public function getMarque(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->marque;
    }
    public function getModele(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->modele;
    }
    public function getNbPortes(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->nbPortes;
    }
    public function getVitesseActuelle(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->vitesseActuelle;
    }
    public function getStatut(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->statut;
    }
    //setteur
    public function setMarque($val){ //mutateur setteur modifie la valeur de lattribut d'un objet 
        $this->marque=$val;
    }
    public function setModele($val){ //mutateur setteur modifie la valeur de lattribut d'un objet 
        $this->modele=$val;
    }
    public function setNbPortes($val){ //mutateur setteur modifie la valeur de lattribut d'un objet 
        $this->NbPortes=$val;
    }
    public function setVitesseActuelle($val){ //mutateur setteur modifie la valeur de lattribut d'un objet  
        $this->vitesseActuelle=$val;
    }
    public function setStatut($val){ //mutateur setteur modifie la valeur de lattribut d'un objet  
        $this->statut=$val;
    }
    public function infoStatut(){
        if($this->statut==true){
            echo " est démarré ";
        }
        else echo " est à l'arret ";
    }
    public function infoVehicule(){
       echo " Nom et modèle du véhicule: ".$this->marque." ".$this->modele."<br/>";
       echo " Nombre de portes: ".$this->nbPortes."<br/>";
    }
    //demarrer( ), accelerer( ) et stopper( ) 
    public function demarrer($marque, $modele,$vitesse){ 
        $this->marque=$marque;
        $this->modele=$modele; 
        $this->vitesseActuelle=$vitesse;
        if($vitesse>0 && $this->getStatut()==false){    
            echo "Le véhicule ".$marque." ".$modele." démarre ";
            $this->setstatut(true);
        }
        else {
            echo " a déja démarré";
        }
       
    }
    public function accelerer($marque, $modele,$vitesse){ 
        $this->marque=$marque;
        $this->modele=$modele;
        $this->vitesseActuelle=$vitesse;
        if($vitesse==50 && $this->getStatut()==true){ 
            echo "Le véhicule ".$marque." ".$modele." accélere de $vitesse Km/h";
        }
        else {
            echo " Le véhicule ".$this->$marque." ".$this->$modele." veux accélerer de $vitesse Km/h";
            echo "<br/>";
            echo " Pour accélerer, il faut démarré le véhicule ".$this->marque." ".$this->modele." !";
        }
    }
    public function stopper($marque, $modele,$vitesse){ 
        $this->marque=$marque;
        $this->modele=$modele;
        $this->vitesseActuelle=$vitesse;
        if($vitesse==0 && $this->getStatut()==true){  
            echo "Le véhicule ".$marque." ".$modele." est stoppé";
            $this->setStatut(false);
        }
        else {
            echo " Il faut stoppé le véhicule ";
        }
    }
    public function ralentir($marque, $modele,$vitesse){ 
        $this->marque=$marque;
        $this->modele=$modele;
        $vitesseActuelle = $this->vitesseActuelle;
        $vitesseActuelle = $vitesseActuelle - $vitesse;
        echo " a ralenti de $vitesseActuelle km/h";
    }
}
$v1=new Voiture("Peugeot","408",5);
$v1->setvitesseActuelle(50);
$vitesse1=$v1->getvitesseActuelle();

$v1->demarrer("Peugeot", "408",$vitesse1);
echo "<br/>";

$v1->accelerer("Peugeot", "408",$vitesse1);
echo "<br/>";

$v2=new Voiture("Citroën", "C4",3);
$v2->setvitesseActuelle(30);
$vitesse2=$v2->getvitesseActuelle();

$v2->demarrer("Citroën", "C4",$vitesse2);
echo "<br/>";
$v2->setvitesseActuelle(0);
$vitesse2=$v2->getvitesseActuelle();

$v2->stopper("Citroën", "C4",$vitesse2);
echo "<br/>";
$v2->accelerer("Citroën", "C4",20);
echo "<br/>";
echo "La vitesse du véhicule ".$v1->getMarque()." ".$v1->getModele()." est de ".$v1->getVitesseActuelle()." km/h";
echo "<br/>";
echo "La vitesse du véhicule ".$v2->getMarque()." ".$v2->getModele()." est de ".$v2->getVitesseActuelle()." km/h";
echo "<br/><br/>";
//-----------------------------------
echo " Infos véhicule 1";
echo "<br/>****************<br/>";
$v1->infoVehicule();
echo " Le véhicule ".$v1->getMarque();
$v1->infoStatut();
//$v1->demarrer("Peugeot","408",$vitesse2);
echo "<br/>";
echo "Sa vitesse actuelle est de ".$v1->getVitesseActuelle()." km / h <br/><br/>";
//----------------------------------
echo " Infos véhicule 2";
echo "<br/>****************<br/>";
$v2->infoVehicule();
echo " Le véhicule ".$v2->getMarque();
$v2->infoStatut();
echo "<br/>";
echo "Sa vitesse actuelle est de ".$v2->getVitesseActuelle()." km / h <br/>";