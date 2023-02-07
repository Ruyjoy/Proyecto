<?php

include("/xampp/htdocs/Proyecto/Model/Conexion.php");

$db = new Conexion();
$con = $db->conectar();




$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
$telefono = isset($_GET['telefono']) ? $_GET['telefono'] : '';
$direccion = isset($_GET['dir']) ? $_GET['dir'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';


if ($codigo == '') {

    echo 'Error al procesar la información';
    exit;
} 
    if (isset($_POST['Editar'])) {

        
        $pass = $_POST['pass'];
        $nombre = $_POST['nombre'];
        $tel = $_POST['tel'];
        $direccion = $_POST['dir'];
        $mail = $_POST['mail'];


        $consulta = "UPDATE usuario SET  pass = '$pass' , nombre = '$nombre', telefono = '$tel', direccion = '$direccion' ,  mail = '$mail' , rol = 4  Where codigo = '$codigo' AND rol = 4 ";
        $resultado = mysqli_query($con, $consulta);

        //Si existe en base de datos -------
        if ($resultado == true) {
            echo "<script>alert('Se han actualizado los cambios correctamente, actualice la p\u00E1gina para ver los cambios'); window.location='ListarUsuVeterinaria.php'</script>";
        } else {

            echo "Error";
        }
    } 



//Reset Pass
if (isset($_POST['reset'])) {

    eliminarIntentos($codigo);
}
 


//Eliminar 
if (isset($_POST['Eliminar'])) {


    $consulta = "DELETE FROM usuario WHERE  codigo = '$codigo' AND rol = 4 ";
    //unlink($imagen); //acá le damos la direccion exacta del archivo
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($resultado == true) {
        echo "<script>alert('Se ha eliminado correctamente, favor de  actualizar la p\u00E1gina para ver los cambios'); window.location='ListarUsuVeterinaria.php'</script>";
    } else {

        $alert = "Error";
    }
}

function  eliminarIntentos($documento)
{

    $db = new Conexion();
    $con = $db->conectar();

    $sentencia = $con->prepare("DELETE FROM intentos_usuario WHERE id_usuario = '$documento'");
    $sentencia->execute();
}
