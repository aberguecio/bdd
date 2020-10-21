<?php
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $edad = $_POST["edad"];
  $sexo = $_POST["sexo"];
  $numero_pasaporte = $_POST["numero_pasaporte"];
  $nacionalidad = $_POST["nacionalidad"];
  $contraseña = $_POST["contraseña"];


  $query_string = "INSERT INTO Usuarios VALUES ('$numero_pasaporte','$nombre', '$edad','$sexo','$nacionalidad','$contraseña')";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
  ?>
