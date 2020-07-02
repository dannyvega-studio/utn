<?php

//conexion a la BD
include 'conexion.php';

//pasamos los datos desde el controlador a variables php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//guardamos en una variable la consulta a la BD para saber si el correo y contraseña se encuentran en la BD
$select = "SELECT correo, contraseña FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";

//se ejecuta la consulta
$resultado = mysqli_query($conexion, $select);

//verificamos si se encuentra un resultado en la BD
if(mysqli_num_rows($resultado) > 0){
    $resp = mysqli_fetch_array($resultado);
    //el json lo puse como comentario porque mostraba en consola los datos de la cuenta del usuario
    //echo json_encode($resp);
    echo 'Usuario correcto';
} else {
    echo 'Datos incorrectos';
}

mysqli_close($conexion);
?>