<?php
  require("../config/conexion.php");

  $puerto = $_POST["puerto"];
  $barco = $_POST["barco"];
  echo "$barco , $puerto";

  $query_string = "SELECT COUNT(Puertos.ciudad_puerto) FROM Puertos, (SELECT nombre_puerto FROM Instalaciones, (SELECT id_instalacion FROM Barcos, Permisos WHERE Barcos.patente_barco = Permisos.patente_barco AND Barcos.patente_barco = (SELECT patente_barco FROM Barcos WHERE nombre_barco LIKE '%$barco%')) as foo WHERE Instalaciones.id_instalacion = foo.id_instalacion) AS fua WHERE Puertos.nombre_puerto = fua.nombre_puerto AND Puertos.ciudad_puerto LIKE '%$puerto%';";
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

  <div class="col-lg-3 col-6 text-center">"
            <span data-toggle="counter-up"><?php $r[0] ?></span>"
            <p>Projects</p>"
  </div>"


<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td></tr>";
    }
  ?>
</table>