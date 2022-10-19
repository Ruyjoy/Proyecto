<?php

include '/xampp/htdocs/Proyecto/Model/M_registroOng.php';

if (isset($_POST['agregarOng'])) {


    $codigo = $_POST['codigo_ong'];
    $pass = $_POST['pass_ong'];
    $nombre = $_POST['nombre_ong'];
    $tel = $_POST['tel_ong'];
    $dir = $_POST['dir_ong'];
    $mail = $_POST['mail_ong'];
    


    $registro = new M_agregarOng();
    $registro->agregarOng($codigo,$pass, $nombre, $tel, $dir , $mail);
}

?>
