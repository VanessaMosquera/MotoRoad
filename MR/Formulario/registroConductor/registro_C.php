<?php
    include("../../conexionBD.php");
    if(isset($_POST["registrar"])){
        $nombres =  trim ($_POST["nombres"]);
        $apellidos = trim ($_POST["apellidos"]);
        $email = trim ($_POST["email"]);
        $contraseña = trim ($_POST["contraseña"]);
        $nacimiento = trim ($_POST["nacimiento"]);
        $genero =  trim ($_POST["sexo"]);
        define("KEY_C",1);
        
        $consulta = "INSERT INTO `registro_conductor`( `nombres`, `apellidos`, `correo`,  `contraseña`, `fecha_nacimiento`, `genero`,`KEY_C`) 
        VALUES ('$nombres','$apellidos','$email','$contraseña','$nacimiento','$genero','KEY_C')";
        $registro = mysqli_query($conex,$consulta);
        if($registro){
            print("exito")
            ?>
            <script>
                alert("se ha registrado con exito ")
            </script> 
            <?php
        }
        else{
            print("fallo")
            ?>
            <script>
                alert("no se ha registrado con exito ")
            </script> 
            <?php
        }
    }
 ?>