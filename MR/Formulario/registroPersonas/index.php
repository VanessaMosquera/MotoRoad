<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="contenedero">
        <div class="bienvenida">
            <div class="inicio">
                <h2>Bienvenido a Moto Road</h2>
                <p> Necesitas quien te lleve? MotoMouse te puede ayudar registrate y selecciona tu conductor de confiaza. <br>
                    Si ya estas registrado, Inicia sesión aquí</p>
                <a href="../../index.html"><button class="boton">Inicio</button></a>
            </div>
        </div>
<form class="formulario">
    <h2 class="crear-cuenta">Crear una cuenta pasajero</h2>

    <input type="text" name="nombre" id="nombre"  placeholder="Ingrese un nombre" required>
	<input class="datos" name="apellidos" type="text" placeholder="Ingrese sus apellidos">
            <input type="text" name="direccion" id="direccion"placeholder="Ingrese una dirección" required>
            <input type="text" name="telefono" id="telefono"  placeholder="Ingrese un télefono" required>
            <input type="text" name="correo" id="correo"  placeholder="Ingrese un correo" required>
            <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una contraseña" required>
			<input class="datos" name="confirmar-contraseña" type="password" placeholder="Por favor confirme su contrseña" required> <br>

			<p class="opciones">Seleccione un genero</p>
			<div class="opciones">
			Femenino<input type="radio" name="Genero" id="Femenino" value="Femenino" required>
			Masculino<input type="radio" name="Genero" id="Masculino" value="Masculino" required><br>
</div>
<strong> Seleccione una fecha de nacimiento </strong>
<input type="date" id="edad" name="nacimiento"> <br>
            <p class="opciones"> Terminos y Condiciones<input type="checkbox" name="Terminos" id="Terminos" required></p>
            <input type="submit" id="boton"  value="Registrarse">
</form>
<?php
include("registro_P.php")
?>
</body>
</html>