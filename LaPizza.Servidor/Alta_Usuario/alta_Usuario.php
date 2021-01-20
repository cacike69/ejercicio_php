


<?php




header("Content-Type: text/html;charset=utf-8");



//Parámetros que vienen del POST

$Nombre_Usuario = $_GET['Nombre_Usuario'];
$Correo_Usuario = $_GET["Correo_Usuario"];
$Contrasenya_Usuario = $_GET["Contrasenya_Usuario"];



echo ' Nombre_Producto: ' . $Nombre_Usuario . '<br>';
echo ' Descripcion_Producto: ' . $Correo_Usuario . '<br>';
echo ' Precio_Producto: ' . $Precio_Producto . '<br>';


//Parámetros de conexión
$servidor = "localhost";
$usuario = "root";
$contraseña = "usbw";
$bd = "test";


//realizamos la conexión
$con = mysqli_connect($servidor, $usuario, $contraseña, $bd);
if (!$con) {
    die("No se ha podido realizar la conexión:  (Creo que no se conecto wey) " . mysqli_connect_error() . "<br>");
} else {
    mysqli_set_charset($con, "utf8");
    // echo "Felicidades lerdo! te has conectado a la BD";

    $_SESSION["con"] = $con;
}

$consulta = mysqli_query($con, "insert into usuarios values ('$Nombre_Usuario','$Correo_Usuario','$Contrasenya_Usuario')");

if (!$consulta) {
    die("awiki wiki fallo en la consulta");
} else {

    


echo '<script> alert ("Datos Insertados")</script>';


    
    //  header("Location: alta_producto.html");

}





?>