<?php
// puisque le form était en method get les données arrivent dans le tableau $_GET
var_dump("tableau GET : ", $_GET);

echo "<br>";
var_dump("tableau POST : ",$_POST);

// avant d'utiliser l'email reçu pour envoyer un mail, enregistrer en base, il faudrait fair un control dessus pour verifier que c'est bien un email valide, le fait que le input soit de type email ne garanti pas que ce sera forcement un email : NEVER TRUST USER !! 
// ce qui vient d'un navigateur client peut etre corrompu


// avant d'afficher des données de $_POST il faut verifier que ce tableau n'est pas vide
// si jamais la requete vient sans données dans les entetes le tableau sera vide

// si le tableau n'est pas vide alors on affiche le message de suite de validation
if (!empty($_POST)) {
  ?>

  <h1>Merci <?= $_POST['firstname'] ?> d'avoir validé le form </h1>
  
  <p>Votre message est le suivant : <?= $_POST['message'] ?></p>

  <?php
}
else {
  echo "<h1>désolé mais on a pas reçu les données<h1>";
}


