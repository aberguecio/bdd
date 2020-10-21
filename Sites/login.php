<?php
  require("config/conexion.php");
?>

<form align="center" action="consultas.php" method="post">
  Rellene los datos para ingresar:
    Numero Pasaporte:<input type="text" name="pasaporte"><br>
    Contraseña:<input type="text" name="contraseña"><br>
    <input type="submit" value="ingresar">
</form>
