<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "iti";
//establecemos la conexion con 4 parametros: Servidor, usuario, contraseña y BD
$conexion = mysqli_connect($server, $user, $password, $database);
//si no se establece la conexion a la BD mandamos un error
if(!$conexion){
    echo 'Error en la conexion a la BD';
}

?>

