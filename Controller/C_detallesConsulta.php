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

?>