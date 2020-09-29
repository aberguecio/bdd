<?php
  require("config/conexion.php");
?>


<form align="center" action="consultas/consulta1.php" method="post">
  Muestre todos los puertos junto la ciudad a la que son asignados.
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



  <?php
  $result = $db -> prepare("SELECT DISTINCT ciudad_puerto FROM Puertos;");
  $result -> execute();
  $datapuertos = $result -> fetchAll();
  ?>
  <form align="center" action="consultas/consulta4.php" method="post">
  Muestre todas las veces que ha atracado en:
    <select name="puerto">
      <?php
      foreach ($datapuertos as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    el barco:
    <input type="text" name="barco">
    <input type="submit" value="Buscar">
  </form>


<form align="center" action="consultas/consulta5.php" method="post">
 Muestre la edad promedio de los trabajadores de cada puerto 
  <input type="submit" name="respuesta" value="Buscar">
</form>

<form align="center" action="consultas/consulta6.php" method="post">
Muestre el puerto que ha recibido más barcos en 
  Mes:
  <input type="number" name="mes">
  Año:
  <input type="number" name="año">

  <input type="submit" name="respuesta" value="buscar">
</form>