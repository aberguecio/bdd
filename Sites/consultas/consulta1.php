<?php
  require("../config/conexion.php");

  $query_string = "SELECT * FROM Puertos;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><td>$r[1]</td></tr>";
    }
  ?>
</table>