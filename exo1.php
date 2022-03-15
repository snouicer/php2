<h1>Algorithmes PHP n°2 Exo 1</h1>
<?php

//Exo 1
/*
Créer une fonction personnalisée convertirMajRouge() 
permettant de transformer une chaîne de caractère passée 
en argument en majuscules et en rouge.Vous devrez appeler
 la fonction comme suit : convertirMajRouge($texte);
*/
// "<style = red>"

$texte="mon texte en parametre";
function convertirMajRouge($texte){
    $color="red";
   $texte=mb_strtoupper($texte);// caractere
    echo "<h2 style=color:".$color.">".$texte."</h2>"; 
}
convertirMajRouge($texte);



