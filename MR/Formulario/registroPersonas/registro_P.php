<?php
    include("../../conexionBD.php");
    if(isset($_POST["registrar"])){
        $nombres =  trim ($_POST["nombres"]);
        $apellidos = trim ($_POST["apellidos"]);
        $email = trim ($_POST["email"]);
        $contraseña = trim ($_POST["contraseña"]);
        $nacimiento = trim ($_POST["nacimiento"]);
        $genero =  trim ($_POST["sexo"]);
        define("KEY_P",0);
        
        $consulta = "INSERT INTO `registro_pasajero`(`nombres`, `apellidos`, `correo`, `contraseña`, `genero`, `KEY_P`)
        VALUES ('$nombres','$apellidos','$email','$contraseña','$genero','KEY_P')";
        $registro = mysqli_query($conex,$consulta);
        if($registro){
            ?>
            <script>
                alert("se ha registrado con exito ")
            </script> 
            <?php
        }
        else{
            ?>
            <script>
                alert("no se ha registrado con exito ")
            </script> 
            <?php
        }
    }
 ?>