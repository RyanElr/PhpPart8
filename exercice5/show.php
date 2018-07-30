<?php
if (isset($_POST['login'])){
setcookie($_POST['login'],'NewCookie',  time() + 365*24*3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice5 Part8 Show</title>
  </head>
  <body>
    <p>
        <?php
        if(isset($_POST['login'])){
            echo $_COOKIE[$_POST['login']];
        }
        ?>
    </p>
  </body>
</html>
