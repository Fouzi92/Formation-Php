<?php 
// Formulaire

if(isset($_POST['prenom']) && isset($_POST['nom']));

echo'Bonjour '.$_POST['prenom'].' '.$POST['nom']. '!';

  echo '<form method="post" action="index.php"> 
    <p>
     <table>
       <tr>
        <td>Prénom</td>
         <td><input type="text" name="prenom"/></td>
       </tr>
       <tr>
        <td>Nom</td>
        <td><input type="text"name="nom"/></td>
        </tr>
     </table>
     <button type="subit">Envoyer</button>
  </p>
  </form>';

?>