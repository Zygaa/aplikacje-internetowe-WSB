<?php
  echo <<< TABLE
  <table>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Miasto</th>
  TABLE;
  for ($i = 1; $i <= 5 ; $i++) {
    echo <<< ROW
      <tr>
        <td>Imię$i</td>
        <td>Nazwisko$i</td>
        <td>Miasto$i</td>
      </tr>
      ROW;
  }
  echo <<< TABLE
  </table>
  TABLE;
 ?>
