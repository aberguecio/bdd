<?php
  require("config/conexion.php");

?>


<form align="center" action="consultas/consulta1.php" method="get">
  <p>Consulta 1</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>

<form align="center" action="consultas/consulta2.php" method="post">
    Nombre:
    <input type="text" name="nombre_puerto">
    <input type="submit" value="Buscar">
</form>


  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo_instalacion FROM Instalaciones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta3.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  


<form action="consultas/consulta4.php" method="get">
  <p>Consulta 4</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consultas/consulta5.php" method="get">
  <p>Consulta 5</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consultas/consulta6.php" method="get">
  <p>Consulta 6</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>