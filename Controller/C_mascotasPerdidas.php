<?php

include '/xampp/htdocs/Proyecto/model/Conexion.php';

     try {

            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "SELECT id, nombre, tipo, lugar, descripcion, fecha, foto FROM mascotas WHERE rolmascota = 1 ";
            $resultado = mysqli_query($con, $consulta);
           
            return $resultado;

        } catch (Exception $e) {
            echo "Error";
        }
        mysqli_close($con);
    

?>