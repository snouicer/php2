<h1>Algorithmes PHP n°2 Exo 10</h1>

<?php
//Exo 10
/* 
En utilisant l’ensemble des fonctions personnalisées crées précédemment, 
créer un formulaire complet qui contient les informations suivantes :
champs de texte avec nom, prénom, adresse e- mail, ville, sexe
et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant
de le soumettre à un traitement de validation (submit).
*/
// declaration de variables:*********************************
$utilisateur = array("Nom","Prénom","E-mail","Ville","Sexe");
$formation= array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");
// creation de fonction:
function afficherInput ($tab){    
    for($i=0;$i<count($tab);$i++){
        echo"<form>";
        echo $tab[$i]."<input name=".$tab[$i]."></input>";
        echo"</form>";   
        }     
}
//********************************************************* 
function alimenterListeDeroulante ($tab){    
    echo"<select>";
        for($i=0;$i<count($tab);$i++){
            echo "<option>".$tab[$i]."</option>";  
        }  
    echo"</select>";   
    echo "<br>";  
}
//Appelle de fonction************************************** 
afficherInput ($utilisateur);
echo  "Formations<br>";
alimenterListeDeroulante($formation);
echo "<br><input type='submit' value='Envoyer le formulaire'>";
