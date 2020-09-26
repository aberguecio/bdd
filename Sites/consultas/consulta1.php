<?php
  require("../config/conexion.php");

  $query_string = "SELECT * FROM Puertos;";
  $query = $db -> prepare($query_string);
  $query -> execute();
  $result = $query -> fetchAll();
?>

?>
<table>
  <?php
    foreach ($result as $r) {
      echo "<tr><td>$r[0] $r[1]</td><</tr>";
    }
  ?>
</table>