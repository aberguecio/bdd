<?php
  require("config/conexion.php");
?>

<form align="center" action="consultas.php" method="post">
  Muestre todos los jefes de las instalaciones del puerto con nombre:
    <input type="text" name="pasaporte">
    <input type="text" name="contraseña">
    <input type="submit" value="ingresar">
</form>
