


<?php




header("Content-Type: text/html;charset=utf-8");



//Parámetros que vienen del POST

$Nombre_Producto = $_GET['Nombre_Producto'];
$Descripcion_Producto = $_GET["Descripcion_Producto"];
$Precio_Producto = $_GET["Precio_Producto"];



echo ' Nombre_Producto: ' . $Nombre_Producto . '<br>';
echo ' Descripcion_Producto: ' . $Descripcion_Producto . '<br>';
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

$consulta = mysqli_query($con, "insert into productos values ('$Nombre_Producto','$Descripcion_Producto','$Precio_Producto')");

if (!$consulta) {
    die("awiki wiki fallo en la consulta");
} else {

    


echo '<script> alert ("Datos Insertados")</script>';


    
    //  header("Location: alta_producto.html");

}





?>