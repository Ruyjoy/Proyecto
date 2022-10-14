<?php
include("../Model/Conexion.php");

class M_registroUsuario
{
    function registra($cedula, $nombreusuario, $pass,  $nombre, $telefono, $mail)
    {
        try {
            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "INSERT INTO usuario(ci, nombre_usuario, pass, nombre, telefono, mail, rol)VALUES ($cedula, '$nombreusuario', '$pass', '$nombre', $telefono, $mail, 2)";
            $resultado = mysqli_query($con, $consulta);

            //Si existe en base de datos -------

            if ($resultado == true) {
                echo "Correcto";
                //echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='lisadocliente.php'</script>";

            } else {
                echo "error";
            }
        } catch (Exception $e) {
            echo "El usuario de esta cedula ya Existe";
        }

        mysqli_close($con);
    }
}
