<h1>Algorithmes PHP n°2 Exo 8</h1>

<?php
//Exo 8
/*
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
*/
$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url,$nb){
    for($i=1;$i<=$nb;$i++){
        echo "<img src=".$url.">";
    }
   
}
repeterImage($url,4);
