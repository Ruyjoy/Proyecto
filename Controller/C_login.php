<?php

include("../Model/Conexion.php");
include("../Controller/C_verificacionDatos.php");

$db = new Conexion();
$con = $db->conectar();




if ( isset($_POST['enviar']) ) {

    $nombre = limpiar_cadena($_POST['c']);
    $pass = limpiar_cadena($_POST['p']);

    $consulta = "SELECT * FROM usuario Where codigo = '$nombre'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ( $fila = mysqli_fetch_assoc($resultado) ) {
        // ebo corregir esto
        if ( $fila['codigo'] == $nombre &&
            password_verify( $pass, $fila['pass'] && $fila['rol'] == 1 ) ) {
        
            $_SESSION['rol'] = $fila['rol'];
            $_SESSION['codigo'] = $fila['codigo'];
            $_SESSION['nombre'] = $fila['nombre'];

            // Envía al usuario logueado al index
            
            if( headers_sent() ) {

                echo "<script> window.location.href='administrador.php'; </script>";

            } else {

                header("Location: administrador.php");

            }

        } elseif ( $fila['codigo'] == $nombre &&
                   password_verify( $pass, $fila['pass'] ) ) {

                    $_SESSION['rol'] = $fila['rol'];
                    $_SESSION['codigo'] = $fila['codigo'];
                    $_SESSION['nombre'] = $fila['nombre'];


                    if( headers_sent() ) {

                        echo "<script> window.location.href='registrousuarios.php'; </script>";

                    } else {

                        header("Location: index.php");

                    }

        }

    } else {

        echo '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <hr>
                    <p class="mb-0">Usuario o Contraseña incorrectos.</p>
              </div>';
    }

    mysqli_close($con);

}

?>