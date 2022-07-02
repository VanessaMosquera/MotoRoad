<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wdth,wght@100,200;100,800;115,800&display=swap" rel="stylesheet">
    <link rel="icon" href="imegenes/logo.icon">

    <title>Formulario de registro </title>

</head>
<body>
    <div class="contenedero">
        <div class="bienvenida">
            <div class="inicio">
                <h2>Bienvenido a Moto Road</h2>
                <p> Te interesa prestar servicios de transporte? Moto Road te puede ayudar, conoce nuestros servicios. <br>
                    Si aún no conoces nuestros servicios da clic aqui</p>
                <a href="../../index.html"><button class="boton">Inicio</button></a>
            </div>
        </div>
    <form class="formulario" action="" method="post">
    <h2 class="crear-cuenta">Crear una cuenta conductor</h2>
    <input class="datos" name="nombres" type="text" placeholder="Ingrese sus nombres" required>
    <input class="datos" name="apellidos" type="text" placeholder="Ingrese sus apellidos">
    <input class="datos" name="email" type="text" placeholder="Ingrese su correo electronico" required>
    <input class="datos" name="contraseña" type="password" placeholder="Ingresa una contraseña" required> <br>
    <input class="datos" name="confirmar-contraseña" type="password" placeholder="Por favor confirme su contrseña" required> <br>
    <strong> Seleccione una fecha de nacimiento </strong>
    <input type="date" id="edad" name="nacimiento"> <br>


    <p class="opciones1">Seleccione un genero</p>
    <div class="opciones">
    Hombre<input type="radio" name="sexo" value="hombre">
    Mujer<input type="radio" name="sexo" value="mujer"> <br>
    </div>
    <p class="opciones">Documentacion al día<input type="checkbox" required>  </p>
    <input class="botonn" type="submit" value="Registrar" id="registrar" name="registrar"> <br>

</form>
    </div>
<?php
include("registro_C.php")
?>
</body>
</html>