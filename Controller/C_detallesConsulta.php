<?php

include("../Model/Conexion.php");

$db = new Conexion();
$con = $db->conectar();


$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la peticion";
    exit;
} else {

    $consulta = "SELECT nombre_con, des_con, precio_con, foto_con FROM consulta WHERE id_con = '$id'";
    $resultado = mysqli_query($con, $consulta);


    $fila = mysqli_fetch_array($resultado);
    $nombrecon = $fila['nombre_con'];
    $des = $fila['des_con'];
    $precio = $fila['precio_con'];
    $foto = substr($fila['foto_con'], 3);
}

if (isset($_POST['btnAgregar'])) {

    $nombre_con = $nombrecon;
    $precio_con= $precio;
    $cantidad = $_POST['can'];

    if (!isset($_SESSION['carrito'])) {


        $producto = array(
            'nombre_producto' => $nombre_con,
            'precio_producto' => $precio_con,
            'cantidad_producto' => $cantidad
        );
        $_SESSION['carrito'][0] = $producto;
    } else { //si existe el producto contamos cuántos hay en el carrito
        // estoy haciendo las validaciones con nombre porque no me toma el id del producto 
        $nom_con = array_column($_SESSION['carrito'], 'nombre_producto');
        if (in_array($nombre_con, $nom_con)) {
            echo "<script>alert('El producto ya está en el carrito');</script>";
        } else {

            $num_pcon = count($_SESSION['carrito']);
            $producto = array(
                'nombre_producto' => $nombre_con,
                'precio_producto' => $precio_con,
                'cantidad_producto' => $cantidad
            );
            $_SESSION['carrito'][$num_productos] = $producto;
        }
    }

    echo "<script>window.location='mostrarCarrito.php'</script>";
    



}


?>