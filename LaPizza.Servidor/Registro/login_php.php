<?php
	
session_start();

$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");

		$Username=$_POST["Usuariolog"];
		$Password=$_POST["Contrasenyalog"];
		
		$servidor="localhost";
		$usuario="root";
		$contraseña="usbw";
		$bd="test";

	$con = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die(mysqli_error("No Se ha podido realizar la conexion"));
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	echo ' Usuario:  '. $Username;
	
	$instruccion = "select count(*) as cuantos from usuarios where nick = '$Username'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}

	if($numero==0){
		echo "El usuario no existe";
	}
	else{
	$instruccion = "select contrasenya as cuantos from usuarios where nick = '$Username'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password2=$fila["cuantos"];
	}


	if (!strcmp($password2 , $Password) == 0){
			echo "Contraseña incorrecta";
	}
	
	else{

		
		echo "Login OK";
		$_SESSION["nick_logueado"]=$Username;


		header("Location: ../Menu/menu.html");
		
		$logueado=1;
	}
	}
?>