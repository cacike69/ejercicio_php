<!doctype html>
<meta charset="utf-8">
<html lang="en">

<head>
    <link href="Style/login.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- este es el login  -->

    <form action="Registro/login_php.php" method="post">
        <div class="login">
            <h1>Login</h1>
            <form method="post">
                <input type="text" name="Usuariolog" placeholder="Username" required="required" />
                <input type="password" name="Contrasenyalog" placeholder="Password" required="required" />
                <button type="submit" class="btn btn-primary btn-block btn-large">Siguiente</button>
            </form>

            <!-- <span> o <a href="registro_html.html"></a> Registrarse </span> -->
            <a id="reg1" href="Registro/registro_html.html">o Registrate</a>
        </div>

  
    </form>
</body>

</html>