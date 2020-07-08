<?php

//conexion a la BD
include 'conexion.php';

?>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <table class="table table-hover table-condensed table-bordered" style="background-color: white;">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Telefono</td>
                <td>Correo</td>
            </tr>

            <?php
            //se consultan los datos de la BD para que aparescan en la tabla
            $select = "SELECT id, nombre, apellido, correo, telefono FROM usuario";
            $respuesta_select = mysqli_query($conexion,$select);
            //mientras existan datos en la BD, estos se guardan en una variable $info
            while($info = mysqli_fetch_row($respuesta_select)){
            //la tabla se deja abierta porque salta llenar los datos que van en la tabla
            ?>

            <tr>
                <td><?php echo $info[1]?></td>
                <td><?php echo $info[2]?></td>
                <td><?php echo $info[3]?></td>
                <td><?php echo $info[4]?></td>
            </tr>

            <?php } //ahora si cerramos el WHILE para que se llene la tabla ?>
        </table>
    </div>
</div>
