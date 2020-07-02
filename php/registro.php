<?php
        
    //conexion a la BD
    include 'conexion.php';

    //pasamos los datos desde el controlador a variables
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

    //guardamos en una variable la consulta a la BD para insertar datos
    $insertar = "INSERT INTO usuario (nombre, apellido, correo, telefono, contraseña) VALUES('$nombre','$apellido','$correo','$telefono','$contraseña')";
    //ejecutamos la consulta y el resultado de la insercion
    $resultado = mysqli_query($conexion, $insertar);
    //si fallo la insercion avisamos al usuario, de lo contrario mencionamos que el registro fue exitoso
    if(!$resultado){
        echo 'Error al registrarse';
    } else {
        echo 'Registro exitoso';
    }

mysqli_close($conexion);
    

?>