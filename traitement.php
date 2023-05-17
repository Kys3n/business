<?php
if(isset($_POST['email'])) {
  $email = $_POST['email'];
  
  // Effectuez ici les actions nécessaires, comme l'ajout de l'adresse e-mail à votre liste de diffusion ou l'envoi du contenu de la formation par e-mail.
  
  // Redirigez ensuite les utilisateurs vers une page de remerciement ou affichez un message de confirmation.
  header('Location: remerciement.html');
  exit();
}
?>
