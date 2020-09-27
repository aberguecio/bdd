<?php
  require("../config/conexion.php");

  $query_string = "SELECT nombre_puerto, AVG(edad) AS edad_promedio  FROM Instalaciones, (SELECT * FROM Personal ORDER BY Personal.id_instalacion) as foo WHERE Instalaciones.id_instalacion = foo.id_instalacion GROUP BY nombre_puerto;";
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