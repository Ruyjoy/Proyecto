<?php

include("../Model/Conexion.php");

$db = new Conexion();
$con = $db->conectar();


$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la peticion";
    exit;
} else {

    $consulta = "SELECT nombre, direccion, mail, img FROM usuario WHERE codigo = '$id' and rol = 3";
    $resultado = mysqli_query($con, $consulta);


    $fila = mysqli_fetch_array($resultado);
    $nombrecon = $fila['nombre'];
    $dire = $fila['direccion'];
    $mail = $fila['mail'];
    $foto = substr($fila['img'], 3);
}

?>