<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice2 Part8 Show</title>
</head>
<body>
  <p>
    <?php
    if(isset($_SESSION['lastname'])){
      echo $_SESSION['lastname'];
    }
    ?>
  </p>
  <p>
    <?php
    if(isset($_SESSION['firstname'])){
      echo $_SESSION['firstname'];
    }
    ?>
  </p>
  <p>
    <?php
    if(isset($_SESSION['age'])){
      echo $_SESSION['age'];
    }
    ?>
  </p>
</body>
</html>
