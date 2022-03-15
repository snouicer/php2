<h1>Algorithmes PHP n°2 Exo 6</h1>

<?php

//Exo 6
/*
Créer une fonction personnalisée permettant de remplir une liste
déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle"); 
alimenterListeDeroulante($elements);
*/

$elements = array("Monsieur","Madame","Mademoiselle"); 
$salut= array("Bonjour","En revoir"); 

function alimenterListeDeroulante ($tab){    
    echo"<select>";
    for($i=0;$i<count($tab);$i++){
        echo "<option>".$tab[$i]."</option>";  
        }  
    echo"</select>";   
    echo "<br>";  
  /*  
    foreach($tab as $element){
    echo $element."<br><option>$element</option><br>";  
    }
*/
}
alimenterListeDeroulante($elements);
alimenterListeDeroulante($salut);