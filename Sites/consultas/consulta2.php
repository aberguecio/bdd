<?php
  require("../config/conexion.php");

  $nombre_puerto = $_POST["nombre_puerto"];

  $query_string = "SELECT rut, nombre FROM  Personal, (SELECT rut_jefe FROM Instalaciones WHERE nombre_puerto LIKE '%$nombre_puerto%') AS Ruts WHERE Ruts.rut_jefe = Personal.rut";  #'%$nombre_puerto%'
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>


<table>
  <tr>
    <th>Rut:</th>
    <th>Nombre</th>
  </tr>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0] $r[1]</td><</tr>";
    }
  ?>
</table>