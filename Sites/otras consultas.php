<?php
  $user = 'grupo97';
  $password = 'langosta';
  $databaseName = 'grupo97e2';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");

  $consulta=($_GET['consulta']);
  
  $query = $db -> prepare($consulta);
  $query -> execute();
  $result = $query -> fetchAll();
?>