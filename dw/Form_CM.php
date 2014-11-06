<html>
<head>
	<title>Fomularios registros y entrada</title>

</head>
<body>
	<form method="POST" action="Registros_CM.php">
		<fieldset>
			<legend>Ingresar</legend>
			<table>
				<td>Email:
					<input type="text" name="email"/>
				</td>
			</tr>
			<tr>
				<td>Contrasena:
					<input type="password" name="pass"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Aceptar">
				</td>
			</tr>
			</table>
		</fieldset>
	</form>
	<form method="post" action="registroddatos.php">
		<fieldset>
			<legend>formulario de registro</legend>
		<table>
			<tr>
				<td>Nombre:
					<input type="text" name="nombre"/>
				</td>
			</tr>
			<tr>
				<td>Apellido:
					<input type="text" name="apellido"/>
				</td>
			</tr>
			<tr>
				<td>Email:
					<input type="text" name="email"/>
				</td>
			</tr>
			<tr>
				<td>Contrasena:
					<input type="password" name="contrasena"/>
				</td>
			</tr>
			<tr>
				<td>Documento CC:
					<input type="text" name="documento"/>
				</td>
			</tr>
			<tr>
				<td>
					<button method="post" type="submit">Enviar</button>
				</td>
			</tr>

		</table>
		</fieldset>



	</form>



</body>

</html>