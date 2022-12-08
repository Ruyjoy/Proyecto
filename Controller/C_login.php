<?php

include("../Model/Conexion.php");
include("../Controller/C_verificacionDatos.php");


$db = new Conexion();
$con = $db->conectar();
session_start();

if (isset($_SESSION['rol'])) {
    header('location: index.php');
}


if ( isset($_POST['enviar']) ) {

    $documento = limpiar_cadena($_POST['c']);
    $pass = limpiar_cadena($_POST['p']);

    $consulta = "SELECT * FROM usuario Where codigo = '$documento'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ( $fila = mysqli_fetch_assoc($resultado) ) {
        
        if ( $fila['codigo'] == $documento &&
        password_verify( $pass, $fila['pass']) )  {

             

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

                case 3:
                    header('location: index.php');
                break;

                case 4:
                    header('location: index.php');
                break;

                default:
           }
            

        } else {
            echo "<script>alert('Usuario o Contraseña incorrectos. , favor de  actualizar'); window.location='login.php'</script>";
        }

    } else {
            

        echo "<script>alert('Usuario o Contraseña incorrectos. , favor de  actualizar'); window.location='login.php'</script>";
    }

    mysqli_close($con);

}

?>