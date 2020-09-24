<?php
  $user = 'grupo97';
  $password = 'langosta';
  $databaseName = 'grupo97e2';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");

  $query_string = "SELECT * FROM Puertos;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
  foreach ($result as $r) {
    echo "<tr><td>$r[0]</td><</tr>";
  }
?>