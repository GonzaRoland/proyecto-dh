<?php

include_once('funciones.php');

if($_POST) {
    $errores = validate($_POST);
    if (count($errores) == 0){
        //PONER EL RESTO DE LA VALIDACIÓN
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DOGGO SHOP - Registro de usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
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
                            <!-- <div class="user">
                                <a href="login.html">Login</a>
                                <a href="form.html">Regístrese</a>
                            </div> -->
                        </nav>
                        <div class="user">
                                <a href="login.html">Login</a>
                                <a href="registro.php">Regístrese</a>
                            </div>
                        </div>
                        <!-- <section class="banner">
                            <img src="img/banneredit.jpg"> -->
                        </section>
                    </header>
                    <main>
            <main class="main-form">
                <section class="form">
                    <p align="center" class="p-form"><strong>¡Creá tu cuenta con nosotros!</strong></p>
                    <br>
                    
                    <form class="datos" action="" method="POST" enctype="multipart/form-data">
                        <fieldset class="ppal">
                            <fieldset>
                                <label for="nombre" name="nombre">Nombre:</label>
                                <input type="text" name="nombre" value="<?php old('nombre') ?>" placeholder="Escribí tu nombre">
                                <br>
                                <label for="apellido" name="apellido">Apellido:</label>
                                <input type="text" name="apellido" value="<?php old('apellido') ?>" placeholder="Escribí tu apellido">
                                <br>
                                <br>
                                <h3><label for="genero" name="genero">Género</label></h3>
                                <label for="genero" name="femenino">Femenino</label>
                                <input type="radio" name="genero">
                                <label for="genero" name="indefinido">Indefinido</label>
                                <input type="radio" name="genero">
                                <label for="genero" name="masculino">Masculino</label>
                                <input type="radio" name="genero">
                                <label for="genero" name="otro">Otro</label>
                                <input type="radio" name="genero">
                                <br>
                                <br>
                                <label for="email" name="email">-Email:</label>
                                <input type="email" name="mail" value="<?php !isset($errores['email']) ? old('email') : "" ?>" placeholder="Escribí tu e-Mail">
                                <? if(isset($errores)) :?>
                                <div class="alert"><p><strong><?= $errores['email'] ?></strong></p></div>
                                <? endif; ?>
                                <br>
                                <label for="username">Nombre de usuario:</label>
                                <br>
                                <input type="text" name="username" value="<?php !isset($errores['username']) ? old('username') : "" ?>" placeholder="Elegí tu nombre de usuario">
                                <? if(isset($errores)) :?>
                                <div class="alert"><p><strong><?= $errores['username'] ?></strong></p></div>
                                <? endif; ?>
                                <br>
                                <label for="password">Password:</label>
                                <br>
                                <input type="password" name="password" placeholder="Elegí tu contraseña">
                                <input type="password" name="cpassword" placeholder="Confirmá tu contraseña">
                                <? if(isset($errores)) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                                <? endif; ?>
                            </fieldset>
                            <fieldset>
                                <h3><label for="animals">¿Qué animales te gustan?</label></h3>
                                <br>
                                <label for="animals" name="gatos">Gatos</label>
                                <input type="checkbox" name="gatos">
                                <label for="animals" name="perros">Perros</label>
                                <input type="checkbox" name="perros">
                                <label for="animals" name="aves">Aves</label>
                                <input type="checkbox" name="aves">
                                <label for="animals" name="reptiles">Reptiles</label>
                                <input type="checkbox" name="reptiles">
                                <label for="animals" name="peces">Peces</label>
                                <input type="checkbox" name="peces">
                            </fieldset>
                            <div align="center">
                                <br>
                                <label for="newsletter" name="newsletter">¿Le gustaría subscribirse a nuestro correo semanal?</label>
                                <input type="checkbox" name="newsletter">
                                <br>
                                <label for="confirm" name="confirm">TÉRMINOS Y CONDICIONES</label>
                                <input type="checkbox" name="confirm">
                                <? if(isset($errores)) :?>
                                <div class="alert"><p><strong><?= $errores['confirm'] ?></strong></p></div>
                                <? endif; ?>
                                <br>
                                <br>
                                <button class="btn" type="submit">ENVIAR</button>
                                <button class="btn" type="reset">BORRAR</button>
                            </div>
                        </fieldset>
                        <br>
                    </form>
                </section>
            </main>
        <footer>
            <nav class="footer-nav">
                <a href="index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="frecuentes.html">FAQ</a>
                    <a href="#">Contacto</a>
                    <a href="login.html">Login</a>
                    <a href="form.html">Regístrese</a>
            </nav>
            <i>2018 Todos los Derechos reservados.</i>
        </footer>
        </div>
    </body>
</html>