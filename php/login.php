<?php

//conexion a la BD
include 'conexion.php';

//pasamos los datos desde el controlador a variables php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$admin = 'dannyvega13579gmail.com';

//se hace una consulta a la BD para ver si el usuario es admin o no
$select_admin = "SELECT * FROM usuario WHERE = '$admin' AND contraseña = '$contraseña'";
$respuesta_select_admin = mysqli_query($conexion,$select_admin);

if(mysqli_num_rows($respuesta_select_admin) == 1){
    echo "1"; // 1 = usuario correcto ADMIN
} elseif(mysqli_num_rows($respuesta_select_admin) == 0){ //si no es el correo del admin se busca si es algun otro correo que ya exista en la BD

$select = "SELECT correo, contraseña FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $select);

//verificamos si se encuentra un resultado en la BD
if(mysqli_num_rows($resultado) > 0){
    $resp = mysqli_fetch_array($resultado);
    /*el json lo puse como comentario porque mostraba en consola los datos de la cuenta del usuario
    echo json_encode($resp);*/
    echo '2'; //2 = usuario correcto PERO no es admin
} else {
    echo '0'; //0 = datos incorrectos
    }

/*mysqli_close($conexion);
se pone como comentario el desconectar de la BD porque el usuario tiene que permanecer conectado*/
}

?>