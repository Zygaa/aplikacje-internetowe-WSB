<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesja 1</title>
  </head>
  <body>
    <h4>Sesja 1</h4>
<?php
  session_start();
  echo "Identyfikator sesji: ".session_id()."<br>";
  //session_name("sesja1");
  $_SESSION['name'] = "Jan";
?>
<a href="./2_session.php">Sesja 2</a>
  </body>
</html>
