<!DOCTYPE html>
<html>
<head>
	<title>Ranfiel</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="validar.js" type="text/javascript"></script>
</head>
<body>
	<div id="navegacion">
		<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="tecnologia.php">Tecnología</a></li>
		<li><a href="https://www.youtube.com">YouTube</a></li>
		<li><a href="redes.php">Redes Sociales</a></li>
		</ul>
	</div> 
	<div id="formulario">
		<h1>Formulario</h1>
		<form name="fvalidacion" action="formulario.php" method="post">
		Nombre(<asterisco id="pNombre">*</asterisco>):<br>
		<label for="nombre"><input id="nombre" type="text" name="nombre"></label><br>
		Apellido(<asterisco id="pApellido">*</asterisco>):<br>
		<label for="apellido"><input id="apellido" type="text" name="apellido"></label><br>
		Edad(<asterisco id="pEdad">*</asterisco>):<br>
		<label for="edad"><input id="edad" type="text" name="edad"></label><br>
		Cedula o Pasaporte(<asterisco id="pCedula">*</asterisco>):<br>
		<label for="cedula"><input id="cedula" type="text" name="cedula"></label><br>
		Genero(<asterisco id="pGenero">*</asterisco>):<br>
		<label for="genero"><Input type = 'Radio' Name ='genero' value= 'Masculino'>
		Masculino
		<Input type = 'Radio' Name ='genero' value= 'Femenino'>
		Femenino</label>
		<br><br>

        <input type="button" value="Enviar" onclick="validacion()">
        <input type="reset" value="Limpiar" />
		</form>
	</div>
</body>
</html>