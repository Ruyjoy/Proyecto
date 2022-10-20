<?php
include("../Model/Conexion.php");

class M_registroUsuario
{
    function registra($codigo, $pass,  $nombre, $telefono, $direcion, $mail)
    {
        try {
            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "INSERT INTO usuario(codigo, pass, nombre, telefono, direccion, mail, rol)VALUES ('$codigo', '$pass', '$nombre', $telefono, '$direcion', '$mail', 2)";
            $resultado = mysqli_query($con, $consulta);

            //Si existe en base de datos -------

            if ($resultado == true) {
                echo "Correcto";
                //echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='lisadocliente.php'</script>";

            } else {
                echo "error";
            }
        } catch (Exception $e) {
            echo $e;
        }

        mysqli_close($con);
    }
}
