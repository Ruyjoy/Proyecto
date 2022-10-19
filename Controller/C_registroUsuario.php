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
 }

 include ("../Model/Conexion.php");
 
 if(isset($_POST['crear'])){
    if(empty($_POST['cedula']) or empty($_POST['nombre']) or empty($_POST['nombre']) or empty($_POST['nombre']) or empty($_POST['nombre'])){
        echo "Uno de los campos está vacio";
    }else{
    
        $cedula = $_POST['cedula'];
        $nombreusuario = $_POST['nombreusuario'];
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $telefono = $_POST['tel'];
        $mail = $_POST['mail'];

        $registro = new M_registroUsuario();
        $registro->registra($cedula, $nombreusuario, $pass,  $nombre,  $telefono, $mail);
    }
 }

?>*/

    require_once ("/laragon/www/Proyecto/Model/Conexion.php");
    include ("/laragon/www/Proyecto/View/RegistroUsuarios.php");

    $db = new Conexion();
    $conexion = $db->conectar();

    // Almacena los datos
    $nombre = $db->limpiar_cadena( $_POST['nombre'] );

    $cedula = $db->limpiar_cadena( $_POST['cedula'] );

    $usuario = $db->limpiar_cadena( $_POST['usuario'] );

    $telefono = $db->limpiar_cadena( $_['tel'] );

    $email = $db->limpiar_cadena( $_POST['email'] );

    $rol = 2; //Variable que guarda el rol del usuario que se registra

    $clave_1 = $db->limpiar_cadena( $_POST['pass'] );
    $clave_2 = $db->limpiar_cadena( $_POST['pass2'] );

    // Vereficamos los campos que debe ingresar el nuevo usuario
    if ( $nombre == "" || $cedula == "" || $usuario == "" || $telefono == "" || $clave_1 == "" || $clave_2 == "" ) {

        echo "Ocurrió un error inesperado"."<br>"."Debes completar todos los campos requeridos";
        exit();
    }

    // Verificamos integridad de los datos
    
    if ( $db ->verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,70}", $nombre)) {

        echo "Ocurrió un error inesperado"."<br>"."El nombre no coincide con el formato";
        exit();

    }

    if ( $db->verificar_datos("[.- ]{7,100}", $cedula)) {

        echo "Ocurrió un error inesperado"."<br>"."La cédula de identidad no coincide con el formato";
        exit();

    }

    if ( $db->verificar_datos("[a-zA-Z0-9]{4,20}", $usuario)) {

        echo "Ocurrió un error inesperado"."<br>"."Nombre de usuario no coincide con el formato";
        exit();

    }

    if ( $db ->verificar_datos("{4,20}", $telefono)) {

        echo "Ocurrió un error inesperado"."<br>"."El número de teléfono no coincide con el formato";
        exit();

    }

    if ( $db ->verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave_1 || 
            $db ->verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave_2)) ) {

            echo "Ocurrió un error inesperado"."<br>"."La contraseña no coincide con el formato";
            exit();

    }
    
    // Verificamos datos únicos

    if ( $email != "" || $cedula != "" ) {

            $consulta = ("SELECT * FROM usuario WHERE cedula = $cedula AND mail = '$email'"); // cambiar cedula a varchar
            $check_user = mysqli_query( $conexion, $consulta);
        

            if ( $check_user == true ) {
                
                echo "Ocurrió un error inesperado"."<br>"."El usuario ya existe.";
                exit();

            }

    }

    // verifica las contraseñas
    if ( $clave_1 != $clave_2 ) {

        echo "Ocurrió un error inesperado"."<br>"."Las contraseñas no coinciden.";
        exit();

    } else {

        $clave = password_hash( $clave_1, PASSWORD_BCRYPT, ["cost" => 10]); // encripta la contraseña

    }

    // Guarda los datos
    $guardar_usuario = $conexion;
    $guardar_usuario = $guardar_usuario -> prepare( // método 'prepare' para evitar inyección sql
        "INSERT INTO usuario(ci,nombre_usuario,pass,nombre,telefono,mail,rol) 
        VALUES(:cedula,:usuario,:clave,:nombre,:telefono,:email,:rol)");  // marcadores :nombre 
    
    $marcadores = [
        ":cedula" => $cedula,
        ":usuario" => $usuario,
        ":clave" => $clave,
        ":nombre" => $nombre,
        ":telefono" => $telefono,
        ":mail" => $email,
        "rol" => $rol
    ];
    // ejecuta la consulta
    $guardar_usuario -> execute( $marcadores );

    $guardar_usuario = null; // cierra la conexión a la BD







