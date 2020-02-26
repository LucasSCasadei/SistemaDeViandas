<?php
  require("../../conexiondb/conexionbasededatos.php");
  
$consulta = "SELECT * FROM peso";
$ejecutar = mysqli_query($conexion,$consulta) or die (mysql_error($conexion));

foreach ($ejecutar as $opcionespeso) {
	echo "<option value=".$opcionespeso["Id_peso"].">".$opcionespeso["descripcion"]."</option>";
}


 ?>