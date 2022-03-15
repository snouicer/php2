<h1>Algorithmes PHP n°2 Exo 11</h1>

<?php
//Exo 11
/*
Ecrire une fonction personnalisée qui affiche une date en français 
(en toutes lettres) à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
*/
$date="2018-02-23";

//fonction dattoFrench
// Convertit une date ou un timestamp en français
function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}
echo dateToFrench($date,"l j F Y" );