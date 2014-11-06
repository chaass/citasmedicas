<?php


$db = "bd_citasmedicas";
$servidor = "localhost";
$usuario = "root";
$clave = "";

$conexion = mysql_connect($servidor, $usuario, $clave);

mysql_select_db($db, $conexion);


?>