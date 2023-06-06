<?php 
// Envoi fichier php

if (isset($_FILES['image']) && $_FILES['image'] 
['error'] == 0){

  if ($_FILES['image']['size'] <= 3000000) {

     $informationsImage = pathinfo($_FILES ['image']
     ['name']);
    $extensionImage = $informationsImage['extension'];
     
     $extensionsArray = array('png', 'gif','jpg','jpeg');

     if(in_array($extensionImage, $extensionsArray
     )) {
      move_uploaded_file($_FILES['image'] ['tmp_name'], 'uploads/'.time().rand().rand().'.'
    .$extensionImage);
     
      echo'Envoi bien réussi ;';
     } 
  }
}

echo'<form method="post"action="index.php"
enctype="multipart/form-data">
    <p> 
      <h1>Formulaire</h1>
      <input type="file" name="image"/> <br/>
      <button type="submit">Envoyer</button>
      </p>
</form>'
?>