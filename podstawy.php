<?php
  $name = "Janusz";
  $sourname = "Nowak";
  $city = "Poznań";
  echo "Imię: $name<br>";

  echo "Imię i nazwisko: $name $sourname<br> Miasto: $city<hr>";
  // heredoc
  echo <<<ETYKIETA
    Imię i nazwisko: $name $sourname
    <br>
    Miasto: $city
    <hr>
  ETYKIETA;
  // nowdoc
  echo <<<'ETYKIETA'
    Imię i nazwisko: $name $sourname
    <br>
    Miasto: $city
    <hr>
  ETYKIETA;
  
?>
