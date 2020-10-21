<?php
  require("config/conexion.php");
?>

<form align="center" action="consultas.php" method="post">
  Rellene los datos para ingresar:<br>
    Numero Pasaporte:<input type="number" name="numero_pasaporte"><br>
    Contraseña:<input type="password" name="contraseña"><br>
    <input type="submit" value="ingresar">
</form>
