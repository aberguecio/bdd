<?php
  require("config/conexion.php");

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

<?php
  require("config/conexion.php");

  $query_string = "SELECT * FROM Usuarios;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><td>$r[1]</td></tr>";
    }
  ?>
</table>
