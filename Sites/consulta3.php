<?php
  $user = 'grupo97';
  $password = 'langosta';
  $databaseName = 'grupo97e2';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");

  $query_string = "SELECT DISTINCT  nombre_puerto FROM Instalaciones WHERE tipo_instalacion = 'astillero';";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>

?>
<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0]</td><</tr>";
    }
  ?>
</table>