<?php

include 'conexion.php';

//pasamos los datos desde el CONTROLADOR a variables PHP en ELIMINAR.PHP
$id = mysqli_real_escape_string($conexion,$_POST['id']);

$eliminar = "DELETE FROM  usuario WHERE id = '$id'";
echo $resultado = mysqli_query($conexion,$eliminar);

mysqli_close($conexion);

?>