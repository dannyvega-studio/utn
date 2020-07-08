<?php

//conexion a la BD
include 'conexion.php';

//pasamos los datos desde el controlador a variables php
$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
$contraseña = mysqli_real_escape_string($conexion,$_POST['contraseña']);
$admin = 'dannyvega13579@gmail.com';

//se hace una consulta a la BD para ver si el usuario es admin o no
$select_admin = "SELECT * FROM usuario WHERE correo = '$admin' AND contraseña = '$contraseña'";
$respuesta_select_admin = mysqli_query($conexion,$select_admin);

if(mysqli_num_rows($respuesta_select_admin) == 1){
    echo "1"; // 1 = usuario correcto ADMIN

} else if(mysqli_num_rows($respuesta_select_admin) == 0){ //si no es el correo del admin se busca si es algun otro correo que ya exista en la BD

$select = "SELECT correo, contraseña FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $select);

//verificamos si se encuentra un resultado en la BD
if(mysqli_num_rows($resultado) > 0){
    echo "2"; //2 = usuario correcto PERO no es admin
} else {
    echo "0"; //0 = datos incorrectos
    }

}

?>