<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię">
      <br><br>
      <input type="password" name="password" placeholder="Podaj hasło">
      <br><br>
      <input type="submit" value="ZATWIERDŹ">
    </form>
    <?php
    if (!empty($_POST['name'])) {
      echo "Imię: ".$_POST['name'];
    }
     ?>
  </body>
</html>
