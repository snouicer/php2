<h1>Hello Introduction PHP</h1>

<?php

// un commentaire sur une seule
/*
    commentaire
    sur 
    plusieurs
    lignes
*/

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte";  // string
$chaineDeCaracteres2 = "mon prix est très intéressant";  // string
$chaineDeCaracteres3 = "Mon prix est de";
$entier = 50;  // integer 
$flottant = 9.99;  // float
$booleen = true;  // boolean (true ou false)
$tableau1 = array("valeur 1", 100, "valeur 3");  // array
$tableau2 = ["valeur 1", "valeur 2"];  // array
$date = new DateTime();  // programmation orientée objet (POO) : object

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>";
echo $chaineDeCaracteres3." ".$entier." euros<br>"; // Mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; // Mon prix est de 50 euros

// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espaces inclus !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

// Conversion en majuscules
$chaineMajuscules = mb_strtoupper($chaineDeCaracteres2);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>";

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS TABLEAUX
$tailleTableau = count($tableau1);
$tailleTableau2 = sizeof($tableau2);
echo "Le tableau 1 contient $tailleTableau éléments<br>";
echo "Le tableau 2 contient $tailleTableau2 éléments<br>";

$notes = [12, 14, 9.5, 18.5, 7.5];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne1 = round($sommeNotes / $nbNotes, 2);   // float
$moyenne2 = number_format($sommeNotes / $nbNotes, 2, ".", " "); // string
echo "La moyenne générale est de $moyenne1<br>";
echo "La moyenne générale est de $moyenne2<br>";

// OPERATIONS MATHEMATIQUES
$nbArticles = 5;
$prix = 10.99;
$total = $nbArticles * $prix;
echo "Le total est de $total €<br>";

// afficher le total TTC d'une facture
$tva = 0.20;

// méthode 1
$totalTTC1 = $nbArticles * $prix + $nbArticles * $prix * $tva;
echo "Le total TTC est de $totalTTC1 €<br>";
$totalTTC2 = $nbArticles * $prix * (1 + $tva);
echo "Le total TTC est de $totalTTC2 €<br>";

$texte = "Mon texte";
$calcul = $texte * $tva;
echo $calcul;

echo gettype($texte);
echo gettype($entier);

var_dump($tableau1);
var_dump($total);
var_dump($chaineDeCaracteres);


// STRUCTURES DE CONTROLE

// Conditions (if = si)

$prenom = "Georges";
$age = 16;

if($age >= 18) {
    $result = "majeur";
} else {
    $result = "mineur";
}

echo "$prenom est $result<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie spécifique
/*
    si la personna a plus de 30 ans --> SENIOR
    si la personna a plus de 20 ans --> CADET
    sinon JUNIOR
*/

if(gettype($age) === "integer") {
    if($age >= 30) {
        $result = "Senior";
    } elseif($age >= 20) {
        $result = "Cadet";
    } else {
        $result = "Junior";
    }
    echo "La personne qui a $age ans est : $result<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

/*
    si la valeur est 1 --> OK !
    si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/

$valeur = 0;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}


// BOUCLES
/*
    for (POUR)
    while (TANT QUE)
    foreach (POUR CHAQUE)
*/

// Afficher les chiffres de 1 à 10

for($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

$i = 1;
while($i <= 10) {
    echo $i." ";
    $i++;
}

$valeurs = range(1,10);  // création d'un tableau de 1 à 10 (entiers)
var_dump($valeurs);
foreach($valeurs as $valeur) {
    echo $valeur." ";
}

$voitures = ["Mercedes", "Peugeot", "BMW", "Toyota"];
echo $voitures[1];

var_dump($voitures);

for($i = 0; $i < count($voitures); $i++) {
    echo $voitures[$i]."<br>";
}

$i = 0;
while($i < count($voitures)){
    echo $voitures[$i]."<br>";
    $i++;
}

foreach($voitures as $voiture) {
    echo $voiture."<br>";
}


// Tableaux associatifs (clé => valeur)
// Attention : la clé est UNIQUE !

$formateurs = [
    "stéphane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg"
];

var_dump($formateurs);
// echo "La ville de Stéphane est : ".$formateurs["stéphane"]; 

foreach($formateurs as $prenom => $ville) {
    echo "La ville de ".ucfirst($prenom)." est ".mb_strtoupper($ville)."<br>";
}

$clients = [
    "stéphane" => [
        "adresse" => "10 rue de la Gare",
        "cp" => "68100",
        "ville" => "MULHOUSE",
        "phone" => "0899887766"
    ],

    "virgile" => [
        "adresse" => "1 rue Principale",
        "cp" => "67000",
        "ville" => "STRASBOURG",
        "phone" => "0677556644"
    ]
];

var_dump($clients);
// echo $clients["virgile"]["cp"]." ".$clients["virgile"]["ville"];

foreach($clients as $prenom => $coordonnees) {
    echo $prenom." habite ".$coordonnees["adresse"]." ".$coordonnees["cp"]." ".$coordonnees["ville"]." et a comme numéro de téléphone : ".$coordonnees["phone"]."<br>";
}



// FONCTIONS
echo afficherMessage();
function afficherMessage() : string {
    $message = "Voici mon message<br>";
    return $message;
}

echo calculerCarre(7);
function calculerCarre($nombre) {
    if(gettype($nombre) == "integer") {
        $resultat = $nombre * $nombre;  // pow($nombre, 2)
        return $resultat."<br>";    
    } else {
        return "Erreur : la valeur doit être un entier !<br>";
    }
}

$elements = [10, 133, 90, 99, 45];

foreach($elements as $element) {
    echo pairOuImpair($element);
}

function pairOuImpair($nombre) : string {
    $resultat = "impair";
    if($nombre % 2 == 0) {
        $resultat = "pair";
    } 
    return $resultat."<br>";
}

echo repeterMot("Youpi", 5);
function repeterMot($mot, $repetition) : string {
    $result = "";
    foreach(range(1, $repetition) as $valeur) {
        $result .= $mot." - ";
    } 
    return $result;

    // for($i = 1; $i <= $repetition; $i++) {
    //     $result .= $mot." ";
    // }
}

echo str_repeat("Hourra ", 5);