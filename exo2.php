<h1>Algorithmes PHP n°2 Exo 2</h1>
<?php
//Exo 2
/*Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera
 en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
*/
//$capitales=["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
$capitales=array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

function afficherTableHTML($capitales){
ksort($capitales);
echo "<table border=1><th te>Pays</th><th>Capitale</th>";
// foreach($tableau as $key =>$valeur)
foreach($capitales as $pays=>$capitale){
        echo"<tr><td>".mb_strtoupper($pays)."</td><td>".ucfirst($capitale)."</td></tr>";
 }
echo "</table>";
}
afficherTableHTML($capitales);
