<?php

include '/xampp/htdocs/Proyecto/model/M_agregarProducto.php';

if (isset($_POST['agregar'])) {

    $nombre = $_POST['nombre'];
    $des = $_POST['desc'];
    $precio = $_POST['precio'];

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

        $temporal = imagecreatetruecolor($nAncho,$nAlto);
        imagecopyresized($temporal, $img_original,0, 0, 0, 0,$nAncho, $nAlto,$ancho_original, $alto_original);
        $ruta = '../../img'.'/'.$imagen;
        imagejpeg($temporal, $ruta, 100);




        //$carpeta = '../../img';
        //$ruta = $carpeta . '/' . $imagen;
        //move_uploaded_file($imagen_original, $carpeta . '/' . $imagen);
    }


    $registro = new M_agregarProducto();
    $registro->agregarproducto($nombre, $des, $precio, $ruta);
}

?>
