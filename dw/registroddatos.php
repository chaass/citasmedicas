<?php
 include("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['contrasena']) && !empty($_POST['contrasena']) &&
	isset($_POST['documento']) && !empty($_POST['documento'])) {
	
$conec=mysql_connect($servidor,$usuario,$clave)or die("problema al conectar");
mysql_select_db($db,$conec)or die("problema al conectar con la base de datos");



mysql_query("INSERT INTO registros (Nombres,Apellidos,Email,Contrasena,Documento) VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[email]','$_POST[contrasena]','$_POST[documento]')",$conec);

echo "registro exitoso";
}else{
	echo "no se pudo hacer su registro";
}



?>