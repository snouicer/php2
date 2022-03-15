<h1>Algorithmes PHP n°2 Exo 5</h1>

<?php

//Exo 5
/*
Créer une fonction personnalisée permettant de créer un formulaire
de champs de texte en précisant le nom des champs associés.
*/

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput ($tab){    
for($i=0;$i<count($tab);$i++){
    echo"<form>";
    echo $tab[$i]."<br><input name=".$tab[$i]."></input>";
    echo"</form>";   
    }     
  /*  
    foreach($tab as $element){
    echo $element."<br><input name=".$element."></input><br>";  
    echo"<form>";
}
*/
}
afficherInput ($nomsInput);