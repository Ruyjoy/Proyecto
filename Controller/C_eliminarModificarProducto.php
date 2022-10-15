<?php

include("/xampp/htdocs/Proyecto/Model/Conexion.php");
$db = new Conexion();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    echo "Error a la peticion";
    exit;
} else {

    $consulta = "SELECT id_producto, nombre_producto,des_producto, precio_producto, imagen_producto FROM productos WHERE id_producto ='$id' AND activo ='1'";
    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_array($resultado);

    $id = $fila['id_producto'];
    $nombre = $fila['nombre_producto'];
    $des = $fila['des_producto'];
    $precio = $fila['precio_producto'];
    $imagen = $fila['imagen_producto'];
}

//Editar

if (isset($_POST['Editar'])) {

    //$id_ = $_POST['id'];
    $des = $_POST['des'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    //$foto = $_POST['foto'];
    

    $consulta = "UPDATE productos SET nombre_producto = '$nombre', des_producto = '$des', precio_producto = $precio,id_catergoria = 1, activo = 1 Where id_producto = $id";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($resultado == true) {
        echo "<script>alert('Se a actualizado los cambios correcatamente, acutalice la p\u00E1gina para ver los cambios'); window.location='ListarProductos.php'</script>";
    } else {

        $alert = "error";
    }
}

//Eliminar 
if (isset($_POST['Eliminar'])) {


    $consulta = "DELETE FROM productos WHERE id_producto = $id ";
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($resultado == true) {
        echo "<script>alert('Se a Eliminado correcatamente, favor de  actualizar la p\u00E1gina para ver los cambios'); window.location='ListarProductos.php'</script>";
    } else {

        $alert = "error";
    }
}

?>