<?php
  require("config/conexion.php");
?>


<form align="center" action="consultas/consulta1.php" method="get">
  Consulta 1
  <input type="submit" name="respuesta" value="ir">
</form>

<form align="center" action="consultas/consulta2.php" method="post">
    Nombre:
    <input type="text" name="nombre_puerto">
    <input type="submit" value="Buscar">
</form>


  <?php
  $result = $db -> prepare("SELECT DISTINCT tipo_instalacion FROM Instalaciones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>
  <form align="center" action="consultas/consulta3.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <input type="submit" value="Buscar por tipo">
  </form>



  <?php
  $result = $db -> prepare("SELECT DISTINCT ciudad_puerto FROM Puertos;");
  $result -> execute();
  $datapuertos = $result -> fetchAll();
  ?>
  <form align="center" action="consultas/consulta4.php" method="post">
    Seleccinar un puerto:
    <select name="puerto">
      <?php
      foreach ($datapuertos as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    y escribe el nombre del Barco:
    <input type="text" name="barco">
    <input type="submit" value="Buscar">
  </form>



  


<form action="consultas/consulta5.php" method="get">
  <p>Consulta 5</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consultas/consulta6.php" method="get">
  <p>Consulta 6</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>