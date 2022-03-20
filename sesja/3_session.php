<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesja 3</title>
  </head>
  <body>
    <h4>Sesja 3</h4>
<?php
  session_start();
  echo "Identyfikator sesji: ".session_id()."<br>";
  echo "Imię: ".$_SESSION['name']."<br>";
  print_r($_SESSION);
?>
    <a href="1_session.php">Sesja 1</a>
  </body>
</html>
