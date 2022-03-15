<h1>Algorithmes PHP n°2 Exo 15</h1>

<?php
//Exo 12
/*
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, 
vérifier si une adresse e-mail a le bon format.
*/

// declaration de variables:
$email="elan@elan-formation.fr";
//filter_var:Filtre une variable avec un filtre spécifique
//https://www.php.net/manual/fr/filter.filters.validate.php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    echo "L’adresse $email est une adresse e-mail est valide"; 
} else {
    echo "L’adresse $email est une adresse e-mail n'est pas valide";
}
