<?php
  $user = 'grupo97';
  $password = 'langosta';
  $databaseName = 'grupo97e2';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");

?>
<form action="otras consultas.php">
  <p>consulta manual: <input type="text" name="consulta"></p>
  <p><input type="submit" value="Enviar"></p>
</form>
<form align="center" action="consultas/consulta_tipo_nombre.php" method="post">
    Tipo:
    <input type="text" name="tipo_elegido">
    <br/>
    Nombre:
    <input type="text" name="nombre_pokemon">
    <br/><br/>
    <input type="submit" value="Buscar">
</form>

<form action="consulta1.php" method="get">
  <p>Consulta 1</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consulta2.php" method="get">
  <p>Consulta 2</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consulta3.php" method="get">
  <p>Consulta 3</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consulta4.php" method="get">
  <p>Consulta 4</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consulta5.php" method="get">
  <p>Consulta 5</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>
<form action="consulta6.php" method="get">
  <p>Consulta 6</p>
  <p><input type="submit" name="respuesta" value="ir"></p>
</form>