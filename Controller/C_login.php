<?php

include("../Model/Conexion.php");
include("../Controller/C_verificacionDatos.php");


$db = new Conexion();
$con = $db->conectar();
session_start();

if (isset($_SESSION['rol'])) {
    header('location: index.php');
}

define("MAXIMOS_INTENTOS", 5);


if (isset($_POST['enviar'])) {

    $documento = limpiar_cadena($_POST['c']);
    $pass = limpiar_cadena($_POST['p']);

    $valor = hacerLogin($documento, $pass);
    if ($valor == 0) {
        # Correo o contraseña incorrectos
        echo "<script>alert('Usuario o Contraseña incorrectos. , favor de  actualizar'); window.location='login.php'</script>";
    } else if ($valor == 2) {
        echo "<script>alert('Contactar a administrador para reiniciar , favor de actualizar'); window.location='login.php'</script>";
    } else {
        #Todo bien. Iniciar sesión y redireccionar a la página
       
    }
}




/*
Regresa valores numéricos
0 en caso de que el usuario no exista o la contraseña sea incorrecta
1 en caso de que todo esté bien
2 en caso de que haya alcanzado el límite de intentos
*/
function hacerLogin($documento, $pass)
{
    $db = new Conexion();
    $con = $db->conectar();

    $consulta = "SELECT * FROM usuario Where codigo = '$documento'";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($fila = mysqli_fetch_assoc($resultado)) {

        # Sí hay registros, pero no sabemos si ya ha alcanzado el límite de intentos o si la contraseña es correcta
        $conteoIntentosFallidos = obtenerConteoIntentosFallidos($documento);
        if ($conteoIntentosFallidos >= MAXIMOS_INTENTOS) {
            # Ha superado el límite
            return 2;
        } else {
            # Extraer la correcta de la base de datos
            $palabraSecretaCorrecta =  password_verify($pass, $fila['pass']);
            # Comparar con la proporcionada:
            # Nota: esto es por simplicidad, en la vida real debes hashear las contraseñas

            if (password_verify($pass, $fila['pass'])) {
                # Todo correcto. Borramos todos los intentos, pues ya hizo uno exitoso
                eliminarIntentos($documento);

                $rol = $fila['rol'];

                $_SESSION['rol'] = $rol;
                $_SESSION['codigo'] = $fila['codigo'];
                $_SESSION['nombre'] = $fila['nombre'];
        
        
                switch ($_SESSION['rol']) {
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
                return 1;
            } else {
                # Agregamos un intento fallido
                agregarIntentoFallido($documento);
                return 0;
            }
        }
    } else {
        # No hay registros que coincidan, y no hay a quién culpar (porque el usuario no existe)
        return 0;
    }
}

function agregarIntentoFallido($documento)
{

    $db = new Conexion();
    $con = $db->conectar();

    $consulta = "INSERT INTO intentos_usuario(id_usuario)VALUES ('$documento')";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado == true) {
        
    }
}
function obtenerConteoIntentosFallidos($documento)
{
    /*$db = new Conexion();
    $con = $db->conectar();
    $sentencia = $con->prepare("SELECT COUNT(*) AS conteo FROM intentos_usuairo  Where is_usuario = '$documento'");
    $sentencia->execute();
    $registro = $sentencia->fetch_object();
    $conteo = $registro->conteo;*/

    $db = new Conexion();
    $con = $db->conectar();

    $consulta = "SELECT COUNT(*) AS total FROM intentos_usuario  Where id_usuario = '$documento'";
    $resultado = mysqli_query($con, $consulta);
    $result = mysqli_fetch_array($resultado);
    $num = $result['total'];


    return $num;
}

function  eliminarIntentos($documento)
{

    $db = new Conexion();
    $con = $db->conectar();

    $sentencia = $con->prepare("DELETE FROM intentos_usuario WHERE id_usuario = '$documento'");
    $sentencia->execute();
}
