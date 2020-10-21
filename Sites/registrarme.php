<?php
  require("config/conexion.php");
?>

<form align="center" action="consultas.php" method="post">
  Rellene los datos para registrarse:<br>
    Nombre:<input type="text" name="pasaporte"><br>
    Edad:<input type="number" name="pasaporte"><br>
    Sexo:<select id="cars" name="carlist" form="carform">
        <option value="f">Femenino</option>
        <option value="m">Masculinno</option>
        <option value="null">Otro</option>
    </select>
    Numero Pasaporte:<input type="number" name="pasaporte"><br>
    Nacionalidad:<input type="text" name="pasaporte"><br>
    Contraseña:<input type="text" name="contraseña"><br>
</form>
