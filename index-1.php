<?php
/* echo "Hello World";

// Les Variablen en Php 
$age_du_lyceen =  18 ; // Entier (int)
$age_du_lyceen =  18.5 ; // Float
// $age_du_lyceen = "Ici c'est Paris" chaine de caractere ou string en anglais

$est_majeur = false; // bool vrais ou faux

// Convention Internationale ou Kamel anglais il faut mettre une majucule dans chacun 1er lettre d'un nouveau mot exsemple en bas

$ageDuLyceen = 20;


echo $age_du_lyceen; */

// Concatenation de variable 
/*/$direBonjour =  "Aller";
$distanation = "PARIS SG";

echo $direBonjour . ' ' .$distanation. ' le football gagne !';*/

//Operateur en Php 
// Regarde la petite fiche dans le dossier !
//Les tableaux en Php 

//  $identitePersonneA = array (
//      'id'     => 32,
//      'prenom' => 'Oscar',
//      'nom'    => 'Gold',
//      'age'    => '28'
//  );

//$identitePersonneA = array(15, 'Eden', 'Yokohama', 36, 'chomeur');

//echo 'Salam ' .$identitePersonneA ["prenom"].' '. $identitePersonneA["nom"].' !';

$identitePersonneB = array (
    'id'     => 21,
    'prenom' => 'Yassine',
    'nom'    => 'Ben Saliman',
    'age'    => 22
);

$ageDans50ans = $identitePersonneB ['age'] + 50;


echo 'Salam ' .$identitePersonneB['prenom'].' '.$identitePersonneB['nom'].' ! Dans 50 ans vous aurez '.$ageDans50ans. ' ans.';

?>