<?php

include("/xampp/htdocs/Proyecto/Model/Conexion.php");

$db = new Conexion();
$con = $db->conectar();

define("KEY_TOKEN", "ABC.975-gmj");

    
    $id = isset($_GET['id']) ? $_GET['id']:'' ;
    $token = isset($_GET['token']) ? $_GET['token']:'' ;
    $nombre= isset($_GET['nombre']) ? $_GET['nombre']:'' ;
    $precio= isset($_GET['precio']) ? $_GET['precio']:'' ;
    $imagen= isset($_GET['imagen']) ? $_GET['imagen']:'' ;
    $des= isset($_GET['des']) ? $_GET['des']:'' ;

    if($id == '' || $token == ''){

        echo'Error al procesar la informacion';
        exit;
    }else{

        $token_tem =  hash_hmac('sha1', $id, KEY_TOKEN );

        if($token==$token_tem){

            if (isset($_POST['EditarCon'])) {
                
                //$id_ = $_POST['id'];
                $des = $_POST['des'];
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                //$foto = $_POST['foto'];
                
            
                $consulta = "UPDATE consulta SET nombre_con = '$nombre', des_con = '$des', precio_con = $precio Where id_con = $id";
                $resultado = mysqli_query($con, $consulta);
            
                //Si existe en base de datos -------
                if ($resultado == true) {
                    echo "<script>alert('Se a actualizado los cambios correcatamente, acutalice la p\u00E1gina para ver los cambios'); window.location='ListarConsultas.php'</script>";
                } else {
            
                    $alert = "error";
                }
            }

            
        }else{
            echo'Error al procesar la informacion';
            exit;
        }



    }


//Editar



//Eliminar 
if (isset($_POST['EliminarCon'])) {


    $consulta = "DELETE FROM consulta WHERE id_con = $id ";
    unlink($imagen);//acá le damos la direccion exacta del archivo
    $resultado = mysqli_query($con, $consulta);

    //Si existe en base de datos -------
    if ($resultado == true) {
        echo "<script>alert('Se a Eliminado correcatamente, favor de  actualizar la p\u00E1gina para ver los cambios'); window.location='ListarConsultas.php'</script>";
    } else {

        $alert = "error";
    }
}

?>