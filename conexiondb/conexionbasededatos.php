<?php 

$host = 'localhost';
$basededatos = 'vianda';
$usuario = 'root';
$contaseña = '';

$conexion = new mysqli($host,$usuario,$contaseña,$basededatos);
if ($conexion -> connect_errno) {
	die("Fallo la conexion : (".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_errno());
}


?>