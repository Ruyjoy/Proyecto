<?php
include '../Model/Conexion.php';

$db = new Conexion();
$con = $db->conectar();

if (isset($_POST['agregarMas'])) {


        $usu = $_SESSION['codigo'];
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $lugar = $_POST['lugar'];
        $des = $_POST['des'];
        $fecha = $_POST['fecha'];
        $rol = 1 ;
        
        //$usu = $_SESSION['codigo'];

        if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {

            $nAncho = 500;
            $nAlto = 500;
            $imagen = $_FILES['foto']['name'];


            $imagen_original = $_FILES['foto']['tmp_name'];

            if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" ){

                $img_original = imagecreatefromjpeg($imagen_original);//Logotipo JPG
             
             }
             if($_FILES["foto"]["type"] == "image/png"){
             
                $img_original = imagecreatefrompng($imagen_original);//Logotipo PNG
             }

            $ancho_original = imagesx($img_original);
            $alto_original = imagesy($img_original);

            $temporal = imagecreatetruecolor($nAncho, $nAlto);
            imagecopyresized($temporal, $img_original, 0, 0, 0, 0, $nAncho, $nAlto, $ancho_original, $alto_original);
            $ruta = '../img' . '/' . $imagen;
            imagejpeg($temporal, $ruta, 100);

        }

        $consulta = "INSERT INTO mascotas (nombre, tipo, lugar, descripcion, fecha, foto, codigo_usu, rolmascota)VALUES ('$nombre','$tipo','$lugar','$des', '$fecha' ,'$ruta' , '$usu'  , $rol)";
        $resultado = mysqli_query($con, $consulta);

        //Si existe en base de datos -------

        //Si existe en base de datos -------
        if ($resultado == true) {
            echo "<script>alert('Se ha agregado correctamente, actualice la p\u00E1gina para ver los cambios'); window.location='index.php'</script>";
        } else {

            $alert = "Error al ingresar datos";
        }
   
}
