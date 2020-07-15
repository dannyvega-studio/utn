<?php

    include 'conexion.php'; //conexion a la BD

    //pasamos los datos desde el controlador a variables PHP
    //usamos el metodo mysqli_real_escape_string para inyectar sql a la BD
    $id = mysqli_real_escape_string($conexion,$_POST['id']);
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $contraseña = mysqli_real_escape_string($conexion,$_POST['contraseña']);

    $editar = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', telefono = '$telefono', 
    contraseña = '$contraseña' WHERE id = '$id'";

    echo $resultado = mysqli_query($conexion, $editar);

    mysqli_close($conexion);

?>