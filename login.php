<?php
session_start();
if (isset($_SESSION['inicio'])) {
	header("Location:inicio.php");
}
?>
<html lang="es">
<head>
	<title>iPhotos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="usu.js"></script>
</head>
<body>
	<div>
		<img src="https://pbs.twimg.com/profile_images/1044234354908585984/kmE4QXob_400x400.jpg" alt="teccmilenio" height="100%">
		<h1>Banca Milenio</h1>
	</div>
	<br> 
		<form id="inicio">
			<h2>Bienvenido</h2>
			<input class="w3-input" type="text" placeholder="Usuario" name= "Usuario"><br>
			<input class="w3-input" type="password" placeholder="Contraseña" name="Contraseña"><br>
			<input class="w3-input w3-button w3-hover-red" type="submit" name="Continuar" value="Continuar" id="boton">
		</form>
</body>
</html>