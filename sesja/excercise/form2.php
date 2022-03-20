<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['error'])) {
        echo "<h5>".$_SESSION['error']."</h5>";
      }
     ?>
    <form action="./scripts/data.php" method="post">
      <input type="text" name="name" placeholder="imię"><br><br>
      <input type="text" name="surname" placeholder="nazwisko"><br><br>
      <select name="city">
        <option value="poznan">Poznań</option>
        <option value="gniezno">Gniezno</option>
      </select>
      <input type="radio" name="plec" value="m">Mężczyzna
      <input type="radio" name="plec" value="k">Kobieta
      <input type="checkbox" name="terms"> Regulamin<br>
      <input type="submit" value="ZATWIERDŹ">
    </form>
  </body>
</html>
