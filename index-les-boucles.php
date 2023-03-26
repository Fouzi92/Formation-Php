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

  // Les Boucles : do - while

   /*$x = 0; 

    do {
      echo 'Le nombre est égale : ' .$x.'<br />';
      $x++;
    } while ($x <10)*/

    echo '<table border style="border-collapse: collapse;">
		<tr>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
		</tr>';

for($i = 1; $i <= 10; $i++)
{
	echo '<tr><th>'.$i.'</th>';

		for($j = 1; $j <= 10; $j++)
		{
			echo '<td>'.$i*$j.'</td>';
		}

	echo '</tr>';
}

 ?>