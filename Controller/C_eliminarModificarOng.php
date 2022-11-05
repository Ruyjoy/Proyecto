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

    echo 'Error al procesar la informacion';
    exit;
} 
    if (isset($_POST['Editar'])) {

        $codigo= $_POST['codigo'];
        $pass = $_POST['pass'];
        $nombre = $_POST['nombre'];
        $tel = $_POST['tel'];
        $direccion = $_POST['dir'];
        $mail = $_POST['mail'];


        $consulta = "UPDATE usuario SET codigo = '$codigo', pass = '$pass' , nombre = '$nombre', telefono = '$tel', direccion = $direccion ,  mail = $mail  Where codigo = '$codigo' AND rol = 3 ";
        $resultado = mysqli_query($con, $consulta);

        //Si existe en base de datos -------
        if ($resultado == true) {
            echo "<script>alert('Se a actualizado los cambios correcatamente, acutalice la p\u00E1gina para ver los cambios'); window.location='ListarOng.php'</script>";
        } else {

            echo "Error";
        }
    } 



//Editar
 


//Eliminar 
if (isset($_POST['Eliminar'])) {


    $consulta = "DELETE FROM productos WHERE id_producto = $id ";
    unlink($imagen); //acá le damos la direccion exacta del archivo
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($resultado == true) {
        echo "<script>alert('Se a Eliminado correcatamente, favor de  actualizar la p\u00E1gina para ver los cambios'); window.location='ListarProductos.php'</script>";
    } else {

        $alert = "error";
    }
}
