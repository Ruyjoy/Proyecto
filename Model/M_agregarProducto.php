<?php
 
 include "/xampp/htdocs/Proyecto/model/Conexion.php";

 class M_agregarProducto
 {
    function agregarproducto($nombre, $des, $precio, $ruta)
    {
        try {
            $db = new Conexion();
            $con = $db->conectar();

            $consulta = "INSERT INTO productos(nombre_producto, des_producto, precio_producto, id_catergoria, activo, imagen_producto)VALUES ('$nombre','$des', $precio, 1, 1, '$ruta')";
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
