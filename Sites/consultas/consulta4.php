<?php
  require("../config/conexion.php");

  $puerto = $_POST["puerto"];
  $barco = $_POST["barco"];

  $query_string = "SELECT COUNT(Puertos.ciudad_puerto) FROM Puertos, (SELECT nombre_puerto FROM Instalaciones, (SELECT id_instalacion FROM Barcos, Permisos WHERE Barcos.patente_barco = Permisos.patente_barco AND Barcos.patente_barco = (SELECT patente_barco FROM Barcos WHERE nombre_barco LIKE '$%barco%')) as foo WHERE Instalaciones.id_instalacion = foo.id_instalacion) AS fua WHERE Puertos.nombre_puerto = fua.nombre_puerto AND Puertos.ciudad_puerto LIKE '%$puerto%';";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>

?>
<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><</tr>";
    }
  ?>
</table>