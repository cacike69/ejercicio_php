<?php


$Usuarioreg=$_GET['Nick'];
$CorreoReg=$_GET["Email"];
$Contrasenyareg =$_GET["Password"];


echo ' Usuario: '.$Usuarioreg.'<br>';
echo ' Correo: '.$CorreoReg.'<br>';
echo ' Contraseña: '.$Contrasenyareg.'<br>';



header("Content-Type: text/html;charset=utf-8");

//Parámetros que vienen del POST



//registro
// $Usuarioreg=$_GET['Usuarioreg'];
// $Contrasenyareg=$_GET["Contrasenyareg"];

$Usuarioreg=$_GET['Usuariolog'];
$CorreoReg=$_GET["Email"];
$Contrasenyareg =$_GET["Contrasenyalog"];






//Parámetros de conexión
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";


//realizamos la conexión
$con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$con)
{
	die("No se ha podido realizar la conexión:  (Creo que no se conecto wey) ". mysqli_connect_error() . "<br>");
}
else
{
	mysqli_set_charset($con,"utf8");
	echo "Felicidades lerdo! te has conectado a la BD";
	$_SESSION["con"]=$con;
}

$consulta=mysqli_query($con,"insert into usuarios values ('$Usuarioreg','$CorreoReg','$Contrasenyareg')");

if(!$consulta)
{
	die("awiki wiki fallo en consulta");
}
else
{
		echo "Datos insertados!";
}


// añadir registros contrasenya y usuario en phph my admin  y terminar de poner la configuracion 




?>