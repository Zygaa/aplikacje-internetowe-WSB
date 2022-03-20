<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesja 2</title>
  </head>
  <body>
    <h4>Sesja 2</h4>
<?php
  session_start();
  echo "Identyfikator sesji: ".session_id()."<br>";
  echo "Imię: ".$_SESSION['name']."<br>";
  session_destroy();
  session_abort();
  session_register_shutdown();
  //session_regenerate_id();
  print_r($_SESSION);
?>
    <a href="3_session.php">Sesja 3</a>
  </body>
</html>
