<?php

include '/laragon/www/Proyecto/Model/Conexion.php';

     try {

            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "SELECT id_producto, nombre_producto, precio_producto, imagen_producto FROM productos WHERE activo ='1'";
            $resultado = mysqli_query($con, $consulta);
           
            return $resultado;

        } catch (Exception $e) {
            echo "Error";
        }
        mysqli_close($con);
    

?>
