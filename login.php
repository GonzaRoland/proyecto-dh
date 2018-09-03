<?php

include_once('funciones.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DOGGOS - Inicio de sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/master.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Varela+Round" rel="stylesheet">
    </head>
    <body>
        <div class="flex-container">
            <header class="main-header">
                <img class="logo" src="img/logo2.png">
                <div class="navs">                        
                    <nav class="main-nav">
                        <a href="index.html">Inicio</a>
                        <a href="#">Productos</a>
                        <a href="frecuentes.html">FAQ</a>
                        <a href="#">Contacto</a>
                    </nav>
                    <div class="user">
                        <a href="login.php">Login</a>
                        <a href="registro.php">Regístrese</a>
                    </div>
                </div>
            </header>
            <main>
                <section >
                    <fieldset class="login-form">
                        <label for="user">Nombre de usuario:</label>
                        <br>
                        <input type="text" placeholder="Ingresá tu nombre">
                        <br>
                        <label for="password">Contraseña:</label>
                        <br>
                        <input type="password" placeholder="Ingresá tu contraseña">
                    </fieldset>
                    <div align="center">
                        <br>
                        <button class="btn" type="submit">ENVIAR</button>
                        <button class="btn" type="reset">BORRAR</button>
                    </div>
                </section>
            </main>
            <footer>
                <nav class="footer-nav">
                    <a href="index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="#">Nosotros</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                    <a href="registro.php">Regístrese</a>
                </nav>
                <i>2018 Todos los Derechos reservados.</i>
            </footer>
        </div>
    </body>
</html>