<h1>Algorithmes PHP n°2 Exo 10 a</h1>

<?php
//Exo 9
/*
Créer une fonction personnalisée permettant d’afficher 
des boutons radio avec un tableau de valeurs
en paramètre ("Monsieur","Madame","Mademoiselle").
*/

$Genre = array("Masculin"=>"","Feminin"=>"","Autre"=>"checked");

function afficherRadio($tab){
    // for($i=0;$i<count($tab);$i++){
    // echo "<input type='radio' checked>".$tab[$i]."</input><br>";
    // }

    foreach($tab as $clef=>$val){
        echo "<input type='radio'".$val.">".$clef."</input><br>";
        }

}
afficherRadio($Genre);
