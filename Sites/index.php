<?php
  $user = 'grupo97';
  $password = 'langosta';
  $databaseName = 'grupo97e2';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");

  $query_string = "SELECT * FROM Puertos;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>
<form action="ejemplo.php">
  <p>Nombre: <input type="text" name="consulta manual"></p>
  <p><input type="submit" value="Enviar"></p>
</form>


<form action="consulta1.php" method="get">
  <p>Consulta 1</p>
  <p>
    <input type="submit" name="respuesta" value="ir">
  </p>
</form>
