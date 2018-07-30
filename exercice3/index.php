<?php
if(!empty($_GET)){
  if(isset($_GET['login']) && isset($_GET['password'])) {
    setcookie('login', $_GET['login'], time() + (800*3));
    setcookie('password', $_GET['password'], time() + (800*3));
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice3 part8</title>
   </head>
   <body>
     <form class="form" action="index.php" method="GET">
       <input type="login" name="lastname" placeholder="Login">
       <input type="password" name="firstname" placeholder="Password">
       <button type="submit" name="validate">Submit !</button>
     </form>
   </body>
 </html>
