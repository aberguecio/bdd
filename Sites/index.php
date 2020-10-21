<?php
  require("config/conexion.php");
?>

<form align="center" action="index.php" method="post">
  consultas
  <input type="submit" name="respuesta" value="Buscar">
</form>

<form align="center" action="consultas/consulta2.php" method="post">
  Muestre todos los jefes de las instalaciones del puerto con nombre:
    <input type="text" name="nombre_puerto">
    <input type="submit" value="Buscar">
</form>


  <?php
  $result = $db -> prepare("SELECT DISTINCT tipo_instalacion FROM Instalaciones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>
  <form align="center" action="consultas/consulta3.php" method="post">
  Muestre todos los puertos que tienen al menos un:
    <select name="tipo">
      <?php
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <input type="submit" value="Buscar">
  </form>
