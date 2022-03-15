<h1>Algorithmes PHP n°2chk Exo 7</h1>

<?php
//Exo 7
/*
Créer une fonction personnalisée permettant 
de générer des cases à cocher. On pourra préciser
 dans le tableau associatif si la case est cochée ou non.
 Exemple :
 genererCheckbox($elements);
où $elements est un tableau associatif clé => valeur avec 3 entrées.
*/
$choix = array("Choix1","Choix2","Choix3"); 
$choixAssociatif = array("Choix1"=>"","Choix2"=>"checked","Choix3"=>""); 
function genererCheckbox($tab){    
    echo"<form>";
    //********************************************************
    // for($i=0;$i<count($tab);$i++){
    //     echo"<input type='checkbox'>";
    //     echo $tab[$i]; echo"</input>";
    //     echo "<br>";   
    //     }  
    //*******************************************************
    // foreach($tab as $element){
    // echo "<br><input type='checkbox'>".$element."</input><br>";
     //*******************************************************
    foreach($tab as $clef=>$val){
      echo "<br><input type='checkbox'$val >".$clef."</input><br>"; 
    }

echo"</form>"; 
}
genererCheckbox($choixAssociatif);
