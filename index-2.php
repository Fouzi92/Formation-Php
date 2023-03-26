<?php
// Les Fonction en PHP 
 
 /*function Hello($prenom, $nom) {

 echo 'Hey '.$prenom. ' '. $nom. '<br />';
 }
    Hello("Pionel" , "Pessi")*/

// Definir une fonction :  les Racines d'une equation 
// ax²+bx

function Racine($a,$b,$c) {

    // Equation 0 ?
    if($a == 0) {
      echo"Cette équation est invalide";
      return; 
    }

    // delta 

    $delta = $b*$b - (4*$a*$c);

    // Condition 
    if ($delta <0 ) {
      echo "Il n'y a pas de solution.";
    }
    else if($delta ==0) {
      $result = -$b/(2*$a);
      echo "Il y a une solution : ".$result;
    }
    else if($delta > 0) {
      $racineA = (-$b - sqrt($delta))/(2*$a);
      $racineB = (-$b + sqrt($delta))/(2*$a);

      echo "Il y a deux solutions, x1 =".$racineA.", x2 = ".$racineB;
    }
}
 Racine(0, 1, 7)
 ?>