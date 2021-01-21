<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "adopciones";

    $conexion = new mysqli($server, $user, $password, $database);
    if ($conexion -> connect_error) { 
        die("Error al establecer conexión con el servidor!!!"); 
    }
?>    
