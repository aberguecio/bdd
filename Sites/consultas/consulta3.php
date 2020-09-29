<?php
  require("../config/conexion.php");

  $tipo = $_POST["tipo"];

  $query_string = "SELECT DISTINCT  nombre_puerto FROM Instalaciones WHERE tipo_instalacion LIKE '%$tipo%';";
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
      echo "<tr><td>$r[0]</td><</tr>";
    }
  ?>
</table>