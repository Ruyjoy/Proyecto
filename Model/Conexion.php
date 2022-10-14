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
}

?>