<?php
  require("../config/conexion.php");

  $nombre_puerto = $_POST["nombre_puerto"];

  $query_string = "SELECT rut_jefe,  FROM Instalaciones WHERE nombre_puerto LIKE '%$nombre_puerto%'"; #'%$nombre_puerto%'
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>


<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><</tr>";
    }
  ?>
</table>