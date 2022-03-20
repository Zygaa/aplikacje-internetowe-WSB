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
  $tekst = "Janusz Kowalski";
  echo str_replace("a", "_***_", $tekst);
  echo "<br>";
  echo strpos("Janusz", "a");
  echo "<br>";
  //wyswietl domene z adresu email z janusz@wp.pl => wp.pl
  $email = "janusz@wp.pl";
  $trigger = strpos($email, "@");
  echo substr($email, $trigger+1);
 ?>
