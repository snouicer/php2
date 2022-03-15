<h1>Algorithmes PHP n°1 Exo 4</h1>
<?php

//Exo 4
/*
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
*/

$capitales=array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

function afficherTableHTML($capitales){
ksort($capitales);
$lien="https://fr.wikipedia.org/wiki/";
echo "<table border=1><th te>Pays</th><th>Capitale</th><th>Lien wiki</th>";
// foreach($tableau as $key =>$valeur)
foreach($capitales as $pays=>$capitale){
        echo"<tr><td>".mb_strtoupper($pays)."</td><td>".ucfirst($capitale)."</td>
        <td><a href=$lien$capitale target='_blank'>Lien</a></td></tr>";
 }
echo "</table>";
}
afficherTableHTML($capitales);
