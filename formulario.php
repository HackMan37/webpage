<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Datos</title>
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
	<div id="datos">
Hola <?php echo $_POST["nombre"]; ?><br>
Tu apellido es: <?php echo $_POST["apellido"]; ?><br>
Tu edad es: <?php echo $_POST["edad"]; ?><br>
Tu cedula/pasaporte es: <?php echo $_POST["cedula"]; ?><br>
Tu genero es: <?php echo $_POST["genero"]; ?><br>
	</div>
</body>
</html>