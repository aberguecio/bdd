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
  <p>Nombre: <input type="text" name="nombre"></p>
  <p><input type="submit" value="Enviar"></p>
</form>

<form action="ejemplo.php" method="get">
  <p>¿Sí o no?</p>
  <p>
    <input type="submit" name="respuesta" value="Sí">
    <input type="submit" name="respuesta" value="No">
  </p>
</form>

<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Altura</th>
  </tr>
  
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><</tr>";
    }
  ?>
</table>