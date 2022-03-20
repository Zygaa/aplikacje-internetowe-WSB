<?php
  echo "<h4>Dane użytkownika</h4>";
  foreach ($_POST as $key => $value) {
    if (empty($value) || !isset($_POST['plec'])) {
      //echo "Pole do wypełnienia: $key<br>";
      echo "<script>history.back()</script>";
    }
    echo "$key: $value"."<br>";
  }
  /* imie nazwisko miasto: pierwsza litera duza, reszta mala, max 10 znakow, dla im i nazwisko
  Płeć: mężczyzna/Kobieta
  */
  echo "<br>";
  echo str_replace(" ","",trim(substr(ucfirst(strtolower($_POST['name'])), 0, 10)));
  echo "<br>";
  echo str_replace(" ","",trim(substr(ucfirst(strtolower($_POST['surname'])), 0, 10)));
  echo "<br>";
  if ($_POST['plec'] == 'k') {
    echo "Kobieta";
  }
  else if ($_POST['plec'] == 'm') {
    echo "Mezczyzna";
  }
  else "Wrong value";
 ?>
