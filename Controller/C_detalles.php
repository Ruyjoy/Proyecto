<?php

include("../Model/Conexion.php");
$db = new Conexion();
$con = $db->conectar();


$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la peticion";
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

?>