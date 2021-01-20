<?php

$conexion = mysqli_connect('localhost', 'root', 'usbw', 'test');

?>



<!DOCTYPE html>
<html>

<head>
<link rel="STYLESHEET" type="text/css" href="style.css"></link>
    <title>
        Mostrar Productos
    </title>
</head>

<body>
    <br>

    <table class="container">
        <tr>
            <td>Nombre Producto</td>
            <td>Descripcion Producto</td>
            <td>Precio: </td>
        </tr>
        <?php
        $sql = "SELECT * from productos";
        $result = mysqli_query($conexion, $sql);
        
        while($mostrar=mysqli_fetch_array($result)){

      
        ?>
        <tr>
            <td><?php echo $mostrar ['Nombre_producto'] ?></td>
            <td><?php echo $mostrar ['Descripcion_Producto'] ?></td>
            <td><?php echo $mostrar ['Precio_Producto'],"euros" ?></td>
        </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>