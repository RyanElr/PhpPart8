<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
  <p>
    <?php
    //Demande au serveur l'USER AGENT
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
  </p>
  <p>
    <?php
    //Demande au serveur l'adresse IP
    echo $_SERVER['REMOTE_ADDR'];
    ?>
  </p>
  <p>
    <?php
    //Demande au serveur son num
    echo $_SERVER['SERVER_NAME'];
    ?>
  </body>
  </html>
