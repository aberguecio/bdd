<?php
  require("../config/conexion.php");

  $confirmador = TRUE;

  $nombre = $_POST["nombre"];
  $edad = $_POST["edad"];
  $sexo = $_POST["sexo"];
  $numero_pasaporte = $_POST["numero_pasaporte"];
  $nacionalidad = $_POST["nacionalidad"];
  $contraseña = $_POST["contraseña"];

  $query_string = "SELECT numero_pasaporte FROM Puertos;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();

  foreach ($result as $r)  {
    echo "$numero_pasaporte = $r";
    if ($numero_pasaporte = $r){
      $confirmador = FALSE;
    }
  }
  if ($confirmador){
    $query_string = "INSERT INTO Usuarios VALUES ('$numero_pasaporte','$nombre', '$edad','$sexo','$nacionalidad','$contraseña')";
    $query = $db -> prepare($query_string);
    $query -> execute();
    $result = $query -> fetchAll();
    echo "listo, $confirmador";
  }
  else {
    echo "ya existe, $confirmador";
  }
  ?>

