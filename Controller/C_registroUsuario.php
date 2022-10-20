<?php 
 /*include ("../Model/Conexion.php");
 $db = new Conexion();
 $con = $db->conectar(); 

 if(isset($_POST['crear'])){
    if(empty($_POST['cedula']) or empty($_POST['nombre']) or empty($_POST['nombre']) or empty($_POST['nombre']) or empty($_POST['nombre'])){
        echo "Uno de los campos está vacio";
    }else{
    
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['ape'];
        $direccion = $_POST['dir'];
        $telefono = $_POST['tel'];

        $consulta = "INSERT INTO cliente(cli_ci, cli_nombre, cli_apellido, cli_direccion, cli_telefono)VALUES ($cedula, '$nombre',  '$apellido',  '$direccion', $telefono)";
        $resultado = mysqli_query($con, $consulta);

        //Si existe en base de datos -------
     
        if($resultado == true) {
            echo "Correcto";
            //echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='lisadocliente.php'</script>";
    
        }else {
            echo "error";
        }
   
    }
    
    mysqli_close($con);
 }*/

 include ("../Model/M_registroUsuario.php");
 
 if(isset($_POST['crear'])){
    if(empty($_POST['codigo']) or empty($_POST['nombre']) or empty($_POST['pass']) or empty($_POST['tel']) or empty($_POST['dir']) or empty($_POST['mail'])){
        echo "Uno de los campos está vacio";
    }else{
    
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $telefono = $_POST['tel'];
        $direcion = $_POST['dir'];
        $mail = $_POST['mail'];

        $registro = new M_registroUsuario();
        $registro->registra($codigo, $pass,  $nombre, $telefono, $direcion, $mail);
    }
 }

?>