<?php

include("../Model/Conexion.php");
$db = new Conexion();
$con = $db->conectar();



$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la petición";
    exit;
} else {

    $consulta = "SELECT nombre_producto,des_producto, precio_producto, imagen_producto FROM productos WHERE id_producto ='$id' AND activo ='1'";
    $resultado = mysqli_query($con, $consulta);


    $fila = mysqli_fetch_array($resultado);
    $nombreproducto = $fila['nombre_producto'];
    $des = $fila['des_producto'];
    $precio = $fila['precio_producto'];
    $imagen = substr($fila['imagen_producto'], 3);
}

if (isset($_POST['btnAgregar'])) {

        $nombre_producto = $nombreproducto;
        $precio_producto = $precio;
        $cantidad = $_POST['can'];

        if (!isset($_SESSION['carrito'])) {


            $producto = array(
                'nombre_producto' => $nombre_producto,
                'precio_producto' => $precio_producto,
                'cantidad_producto' => $cantidad
            );
            $_SESSION['carrito'][0] = $producto;
        } else { //si existe el producto contamos cuántos hay en el carrito
            // estoy haciendo las validaciones con nombre porque no me toma el id del producto 
            $nom_prod = array_column($_SESSION['carrito'], 'nombre_producto');
            if (in_array($nombre_producto, $nom_prod)) {
                echo "<script>alert('El producto ya está en el carrito');</script>";
            } else {

                $num_productos = count($_SESSION['carrito']);
                $producto = array(
                    'nombre_producto' => $nombre_producto,
                    'precio_producto' => $precio_producto,
                    'cantidad_producto' => $cantidad
                );
                $_SESSION['carrito'][$num_productos] = $producto;
            }
        }

        echo "<script>window.location='mostrarCarrito.php'</script>";
        



}

?>