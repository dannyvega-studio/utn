<?php
        
    //conexion a la BD
    include 'conexion.php';

    //pasamos los datos desde el controlador a variables PHP
    //usamos el metodo mysqli_real_escape_string para inyectar sql a la BD
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $contraseña = mysqli_real_escape_string($conexion,$_POST['contraseña']);

    //realizamos una consulta para saber si el correo ya esta registrado en la BD
    $select = "SELECT * FROM usuario WHERE correo ='$correo'";
    $respuesta_select = mysqli_query($conexion,$select);

    //si el correo no esta registrado en la BD lo insertamos
    if(mysqli_num_rows($respuesta_select) == 0){

    //guardamos en una variable la consulta a la BD para insertar datos
    $insertar = "INSERT INTO usuario (nombre, apellido, correo, telefono, contraseña) VALUES('$nombre','$apellido','$correo','$telefono','$contraseña')";
    //ejecutamos la consulta y el resultado de la insercion
    $resultado = mysqli_query($conexion, $insertar);
    echo "1";

    } else { //si el correo ya estaba en la BD
        echo  "0";
    }

mysqli_close($conexion);
    

?>