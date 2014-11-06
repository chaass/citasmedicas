<?php

include("conexion.php");

$usuario = $_POST["email"];
$contrasena = $_POST["pass"];

//esta es la busqueda de usuarios en la base de datos

$busqueda = mysql_query("select * FROM registros where Email = '".$usuario."' and Contrasena = '".$contrasena."' ");

if ($row= mysql_fetch_array($busqueda)) {

	echo "Inicio sesion correctamente: ".$row["Nombres"];
}else{
	echo "Datos incorrectos. Verifique sus datos e intentelo nuevamente";
}

?>