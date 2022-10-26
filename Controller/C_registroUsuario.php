<?php

require_once ("/laragon/www/Proyecto/Model/Conexion.php");
include ("../Controller/C_verificacionDatos.php");


//include("../Model/Conexion.php");


$db = new Conexion();
$con = $db->conectar();

// Almacena los datos //
if (isset($_POST['crear'])) {
    $codigo = limpiar_cadena($_POST['codigo']);
    $nombre = limpiar_cadena($_POST['nombre']);
    $telefono = limpiar_cadena($_POST['tel']);
    $direccion = limpiar_cadena($_POST['dir']);
    $mail = limpiar_cadena($_POST['email']);

    $rol = 2; //Variable que guarda el rol del usuario que se registra

    $clave_1 = limpiar_cadena($_POST['pass']);
    $clave_2 = limpiar_cadena($_POST['pass2']);

    // Vereficamos los campos que debe ingresar el nuevo usuario
    if ($nombre == "" || $codigo == "" || $direccion == "" || $telefono == "" || $clave_1 == "" || $clave_2 == "") {

        echo '<div class="alert alert-warning" role="alert">
                <h5>Ocurrió un error inesperado</h5><br>Debes completar todos los campos.
              </div>';
        exit();
    }

    // Verificamos integridad de los datos

    if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,70}", $nombre)) {

        echo '<div class="alert alert-warning" role="alert">
                <h5>Ocurrió un error inesperado</h5><br>El nombre no coincide con el formato.
              </div>';
        exit();
    }



    //Tenes que arreglar estos filtros y poner cual es el formato que necesitas 

   /*if ( verificar_datos(".{4,20}", $telefono) ) {

        echo "Ocurrió un error inesperado" . "<br>" . "El número de teléfono no coincide con el formato";
        exit();
    }

    if ( verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave_1 ||
        verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave_2)) ) {

        echo "Ocurrió un error inesperado" . "<br>" . "La contraseña no coincide con el formato";
        exit();
    }*/






    // Verificamos datos únicos  Falta mail

    if ($codigo != "") {

        $consulta = ("SELECT * FROM usuario WHERE codigo = '$codigo' ");
        $check_user = mysqli_query($con, $consulta);


        if ($fila = mysqli_fetch_assoc($check_user)) {

            echo "Ocurrió un error inesperado" . "<br>" . "El usuario ya existe.";
            exit();
        }
    }

    // verifica las contraseñas
    if ($clave_1 != $clave_2) {

        echo "Ocurrió un error inesperado" . "<br>" . "Las contraseñas no coinciden.";
        exit();

    } else {

        $clave = password_hash($clave_1, PASSWORD_BCRYPT, ["cost" => 10]); // encripta la contraseña

    }

    // Guarda los datos

    $consulta = "INSERT INTO usuario(codigo, pass, nombre, telefono, direccion, mail, rol)VALUES ('$codigo', '$clave', '$nombre', $telefono , '$direccion', '$mail', $rol)";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado == true) {
        echo "Correcto";
        //echo "<script>alert('Se a Agregado correcatamente, actualice la p\u00E1gina para ver los cambios'); window.location='lisadocliente.php'</script>";

    } else {

        echo "error";

    }

    mysqli_close($con);
}
