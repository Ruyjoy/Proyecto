<?php

include("../Model/Conexion.php");
$db = new Conexion();
$con = $db->conectar();


$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la peticion";
    exit;
} else {

    $consulta = "SELECT nombre,tipo, lugar, descripcion, foto FROM mascotas WHERE id = $id";
    $resultado = mysqli_query($con, $consulta);


    $fila = mysqli_fetch_array($resultado);
    $nombremas = $fila['nombre'];
    $des = $fila['descripcion'];
    $tipo = $fila['tipo'];
    $lugar= $fila['lugar'];
    $foto = substr($fila['foto'], 0);
}

?>