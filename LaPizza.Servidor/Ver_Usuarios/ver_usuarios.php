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
            <td>Nombre Usuario</td>
            <td>Correo Usuario</td>
           
        </tr>
        <?php
        $sql = "SELECT * from usuarios";
        $result = mysqli_query($conexion, $sql);
        
        while($mostrar=mysqli_fetch_array($result)){

    
        ?>
        <tr>
            <td><?php echo $mostrar ['nick'] ?></td>
            <td><?php echo $mostrar ['email'] ?></td>
          
        </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>