<h1>Algorithmes PHP n°2 Exo 12</h1>

<?php
//Exo 12
/*
La fonction var_dump($variable) permet d’afficher les informations d’une variable. Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
*/

// declaration de variables:
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
//var_dump($tableau);

// foreach($tableauValeurs as $tableauValeur){
//     var_dump($tableauValeur);
//     echo "<br>";

for($i=0;$i<count($tableauValeurs);$i++){
    var_dump($tableauValeurs[$i]);
    echo "<br>";
}
