<?php
  require("config/conexion.php");
?>

<form align="center" action="consultas.php" method="post">
  Rellene los datos para registrarse:<br>
    Nombre:<input type="text" name="nombre"><br>
    Edad:<input type="number" name="edad"><br>
    Sexo:<select name="sexo">
        <option value="m">Masculinno</option>
        <option value="f">Femenino</option>
        <option value="null">Otro</option>
    </select><br>
    Numero Pasaporte:<input type="number" name="numero_pasaporte"><br>
    Nacionalidad:<input type="text" name="nacionalidad"><br>
    Contraseña:<input type="password" name="contraseña"><br>
</form>
