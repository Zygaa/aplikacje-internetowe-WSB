<?php
  $text = <<< T
  WSB - WYŻSZA
  SZKOŁA BANKOWA
  T;
  echo "$text<br>";
  echo nl2br($text)."<br>";
  $name="jANuSZ kOWALski";
  echo strtolower($name);
  echo $name;
  echo ucfirst($name);
  $name = strtolower($name);
  $name = ucwords($name);
  echo "<br>";
  echo $name;
 ?>
