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

            echo '<div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                        <hr>
                        <p class="mb-0">El USUARIO ya existe.</p>
                  </div>';
            exit();
        }
    }

    // verifica las contraseñas
    if ($clave_1 != $clave_2) {

        echo '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <hr>
                    <p class="mb-0">Las contraseñas no coinciden entre sí.</p>
              </div>';
        exit();

    } else {

        $clave = password_hash($clave_1, PASSWORD_BCRYPT, ["cost" => 10]); // encripta la contraseña

    }

    // Guarda los datos

    $consulta = "INSERT INTO usuario(codigo, pass, nombre, telefono, direccion, mail, rol)VALUES ('$codigo', '$clave', '$nombre', $telefono , '$direccion', '$mail', $rol)";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado == true) {

        echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Usuario registrado con éxito!</h4>
                    <hr>
                    <p class="mb-0">Ya puedes iniciar sesión en nuestra plataforma.</p>
              </div>';

    } else {

        echo "error";

    }

    mysqli_close($con);
}
