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

// Conditions : IF 

// $age = 82; 

// if($age > 17) {

//     echo "Vous etes majeur";
// }

// if($age < 17) {
  
//   echo"vous etes mineur";
// }

// $age = 8;

// if($age <= 17 ) {

//     echo'Vous etes minieur';
// }
//  if($age >= 18) { 

//  echo'Vous etes majeur';
//  }

//  if($pseudo == "Tintin" AND $mdp == "Lune") {

//     echo"Mot de passe valide.";
//  }

// LES ternaire https://stacklima.com/php-operateur-ternaire/
// $age = 14;
// echo ($age >= 19) ? "adult" : "not adulet";

//  $pseudo = "Tintin";
//  $mdp = "Lune";

//   if($pseudo == "Tintin" AND $mdp == "Lune") {

//     echo "Mot de passe valide";
//   } else {
//     echo "Mot de passe invalide";
//   }

// $age = 18; 

// if($age > 18) {

//     echo "Vous etes majeur.";
// } else if($age == 18) {
//     echo"Bg vaaaaaa";
// } else { 
//  echo"vous etes mienur";

// }


?>