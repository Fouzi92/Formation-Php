<?php
// Les Boucles : While 

    // $ligne = 0;

    // $plus = 1;

    // // Ma solution 
    // while ($ligne < 10) {
    // echo '<br/>Voici une ligne '. ' ' .$plus++;
    // $ligne++;
    // }

 // la solution du formateur

//   $ligneD = 0;

//   while ($ligneD <10) {
//     echo 'Voici le numéro de la ligne : '.($ligneD+1).' <br/>';
//     $ligneD++;
//   } 

// Les Boucles : For 
 
for ($i = 0; $i <10; $i++) {
    echo 'Voici le numéro de la ligne :'.($i+1).'<br/>';
}
 
  // Les Boucles Foreach 

  $user = array('Nicolas', 'Said', 'Aurelia','Julien','itach','Faouzi');
  /* for($i = 0, $size = count($user); $i < $size; ++$i)
       echo $user[$i].'<br>';*/

foreach ($user as $name) {
echo $name. '<br/>';
}
 ?>