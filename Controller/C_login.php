<?php

include("../Model/Conexion.php");
$db = new Conexion();
$con = $db->conectar();
session_start();

if (isset($_POST['enviar'])) {

    $nombre = $_POST['c'];
    $pass = $_POST['p'];

    $consulta = "SELECT * FROM usuario Where ci = $nombre AND pass = '$pass'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($fila = mysqli_fetch_assoc($resultado)) {

        echo "Estoy";
        $_SESSION['rol']       = $fila['rol'];
        $_SESSION['ci']       = $fila['ci'];
    } else {

        echo "Cedula o  Password son Incorrecto";
    }
    mysqli_close($con);
}

?>