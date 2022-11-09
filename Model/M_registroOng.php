<?php
 
 include "/xampp/htdocs/Proyecto/model/Conexion.php";

 class M_agregarOng
 {
    function agregarOng($codigo,$pass, $nombre, $tel, $dir , $mail, $ruta)
    {
        try {
            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "INSERT INTO usuario(codigo, pass, nombre, telefono, direccion, mail, img, rol)VALUES ('$codigo','$pass','$nombre', $tel, '$dir', ' $mail','$ruta',3)";
            $resultado = mysqli_query($con, $consulta);

            //Si existe en base de datos -------

            //Si existe en base de datos -------
            if ($resultado == true) {
                echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='Listarong.php'</script>";
            } else {

                $alert = "error al ingresar datos";
            }
        } catch (Exception $e) {
            echo $e;
        }

        mysqli_close($con);
    }
 }
?>