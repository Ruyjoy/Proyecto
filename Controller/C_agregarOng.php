<?php

include '/xampp/htdocs/Proyecto/Model/M_registroOng.php';

if (isset($_POST['agregarOng'])) {


    $codigo = $_POST['codigo_ong'];
    $pass = $_POST['pass_ong'];
    $nombre = $_POST['nombre_ong'];
    $tel = $_POST['tel_ong'];
    $dir = $_POST['dir_ong'];
    $mail = $_POST['mail_ong'];

    if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {

        $nAncho = 500;
        $nAlto = 500;
        $imagen = $_FILES['foto']['name'];
        

        $imagen_original = $_FILES['foto']['tmp_name'];

        $img_original = imagecreatefromjpeg($imagen_original);
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
    $foto = $_POST['foto_ong'];
    


    $registro = new M_agregarOng();
    $registro->agregarOng($codigo,$pass, $nombre, $tel, $dir , $mail, $ruta);
}

?>
