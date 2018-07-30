<?php
if (isset($_POST['pseudo']) && isset($_POST['password'])) {
  setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, '/', null, false, true);
  //Cookies , le timer , le paramètre true et une mini sécuritée en plus
  setcookie('password', $_POST['password'], time() + 365*24*3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice4 Part8 Show</title>
  </head>
  <body>
    <?php
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
      echo 'Id: ' . $_COOKIE['pseudo'];
    }
  ?>
  <p>
  <?php
  if (isset($_POST['pseudo']) && isset($_POST['password']))
  echo 'Password: '. $_COOKIE['password'];
   ?>
 </p>
  </body>
</html>
