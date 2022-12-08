<?php
 
 include "/xampp/htdocs/Proyecto/model/Conexion.php";

 class M_agregarConsulta
 {
    function agregarconsulta($nombre, $des, $precio, $ruta)
    {
        try {
            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "INSERT INTO consulta(nombre_con, des_con, precio_con, foto_con)VALUES ('$nombre','$des', $precio,'$ruta')";
            $resultado = mysqli_query($con, $consulta);

            //Si existe en base de datos -------

            //Si existe en base de datos -------
            if ($resultado == true) {
                echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='Administrador.php'</script>";
            } else {

                $alert = "error al ingresar datos";
            }
        } catch (Exception $e) {
            echo "El usuario de esta cedula ya Existe";
        }

        mysqli_close($con);
    }
 }
?>
