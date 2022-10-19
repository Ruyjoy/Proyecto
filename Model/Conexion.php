<?php

class Conexion
{
    private $hostname = "localhost";
    private $database = "proyecto";
    private $username = "root";

    function conectar()
    {
        $conexion = new mysqli($this->hostname, $this->username, "", $this->database);
        if (!$conexion) {
            die("Error en la conexión al servidor ");
        }else{
            //mysqli_close($conexion);
        }
        //echo "Conexion Exitosa";
        return $conexion;
    }



    // Seguridad y verificaciones ---Marcelo
    // Verfica los datos que se ingresan
    function verificar_datos( $filtro, $cadena ) {
        if ( preg_match("/^".$filtro."$/", $cadena) ) {
            return false;
        } else {
            return true;
        }
    }

    // Limpia cadenas de texto
    function limpiar_cadena( $cadena ) {
        $cadena = trim( $cadena );
        $cadena = stripcslashes( $cadena );
        // para evitar inyección sql y ataques xss
        $cadena = str_ireplace( "<script>", "", $cadena );
        $cadena = str_ireplace( "</script>", "", $cadena );
        $cadena = str_ireplace( "<script src>", "", $cadena );
        $cadena = str_ireplace( "<script type>", "", $cadena );
        $cadena = str_ireplace( "SELECT * FROM", "", $cadena );
        $cadena = str_ireplace( "DELETE FROM", "", $cadena );
        $cadena = str_ireplace( "INSERT INTO", "", $cadena );
        $cadena = str_ireplace( "DROP TABLE", "", $cadena );
        $cadena = str_ireplace( "DROP DATABASE", "", $cadena );
        $cadena = str_ireplace( "TRUNCATE TABLE", "", $cadena );
        $cadena = str_ireplace( "SHOW TABLES", "", $cadena );
        $cadena = str_ireplace( "SHOW DATABASES", "", $cadena );
        $cadena = str_ireplace( "<?php", "", $cadena );
        $cadena = str_ireplace( "?>", "", $cadena );
        $cadena = str_ireplace( "--", "", $cadena );
        $cadena = str_ireplace( "^", "", $cadena );
        $cadena = str_ireplace( "<", "", $cadena );
        $cadena = str_ireplace( "[", "", $cadena );
        $cadena = str_ireplace( "]", "", $cadena );
        $cadena = str_ireplace( "==", "", $cadena );
        $cadena = str_ireplace( ";", "", $cadena );
        $cadena = str_ireplace( "::", "", $cadena );
        $cadena = trim( $cadena );
        $cadena = stripcslashes( $cadena );
        return $cadena;
    }

}


?>