<?php
  require("../config/conexion.php");

  $mes = $_POST["mes"];
  $mes2 = $mes + 1;
  echo "este es el mes: $mes ,$mes2";

  $query_string = "SELECT nombre_puerto FROM (SELECT nombre_puerto, COUNT(nombre_puerto) FROM Instalaciones, (SELECT id_instalacion FROM Permisos WHERE fecha_atraque>'2020-$mes-01 00:00:00' AND fecha_atraque<'2020-$mes2-01 00:00:00') as foo WHERE Instalaciones.id_instalacion = foo.id_instalacion GROUP BY nombre_puerto) AS fua WHERE fua.count = (SELECT MAX(count) FROM (SELECT nombre_puerto, COUNT(nombre_puerto) FROM Instalaciones, (SELECT id_instalacion FROM Permisos WHERE fecha_atraque>'2020-08-01 00:00:00' AND fecha_atraque<'2020-09-01 00:00:00') as foo WHERE Instalaciones.id_instalacion = foo.id_instalacion GROUP BY nombre_puerto) AS foo);";
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