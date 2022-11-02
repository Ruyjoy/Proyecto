<?php

include("../Model/Conexion.php");
include("../Controller/C_verificacionDatos.php");

$db = new Conexion();
$con = $db->conectar();




if ( isset($_POST['enviar']) ) {

    $documento = limpiar_cadena($_POST['c']);
    $pass = limpiar_cadena($_POST['p']);

    $consulta = "SELECT * FROM usuario Where codigo = '$documento'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ( $fila = mysqli_fetch_assoc($resultado) ) {

        // ebo corregir esto
        if ( $fila['codigo'] == $documento &&
            password_verify( $pass, $fila['pass']) ) {

            $rol = $fila['rol'];

            $_SESSION['rol'] = $rol;
            $_SESSION['codigo'] = $fila['codigo'];
            $_SESSION['nombre'] = $fila['nombre'];

           switch( $_SESSION['rol'] ) {
                case 1:
                    header('location: ./administrador/administrador.php');
                break;

                case 2:
                    header('location: index.php');
                break;

                default:
           }
            

        } else {

            $alert = '<div class="card-body >  
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                            <p class="mb-0">Usuario o Contraseña incorrectos.</p>
                    </div>
                  </div>';
        }

    }

}

mysqli_close($con);

?>