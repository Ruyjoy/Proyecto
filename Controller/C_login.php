<?php

include("../Model/Conexion.php");
include("../Controller/C_verificacionDatos");

$db = new Conexion();
$con = $db->conectar();
session_start();

if (isset($_POST['enviar'])) {

    $nombre = limpiar_cadena($_POST['c']);
    $pass = limpiar_cadena($_POST['p']);

    $consulta = "SELECT * FROM usuario Where codigo = '$nombre'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ( $fila = mysqli_fetch_assoc($resultado) ) {

        if ( $fila['codigo'] == $nombre &&
            password_verify( $pass, $fila['pass'] ) ) {
        
            $_SESSION['rol']       = $fila['rol'];
            $_SESSION['codigo']       = $fila['codigo'];
            $_SESSION['nombre'] = $fila['nombre'];

            // Envía al usuario logueado al index
            if ( headers_sent() ) {

                echo "<script> window.location.href='index.php'</script>";

            } else {

                header("Location: index.php");
                
            }

        }

    } else {

        echo "Documento o  Contraseña son incorrectos";
    }

    mysqli_close($con);
}

?>