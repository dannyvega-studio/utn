<?php

//conexion a la BD
include 'conexion.php';

?>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <table class="table table-hover table-condensed table-bordered" style="background-color: white;">
            <caption>
                <button class="btn btn-success" data-toggle="modal" data-target="#modalAdminN">
                Agregar Nuevo
                <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </caption>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Telefono</td>
                <td>Correo</td>
                <td>Contraseña</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
            //se consultan los datos de la BD para que aparescan en la tabla
            $select = "SELECT id, nombre, apellido, correo, telefono, contraseña FROM usuario";
            $respuesta_select = mysqli_query($conexion,$select);
            //mientras existan datos en la BD, estos se guardan en una variable $info
            while($info = mysqli_fetch_row($respuesta_select)){
            //la tabla se deja abierta porque salta llenar los datos que van en la tabla
            
            //se crea cadena de datos para enviar al formulario para editar y que se llenen automaticamente
            $datos = $info[0]."||".$info[1]."||".$info[2]."||".$info[3]."||".$info[4]."||".$info[5];

            ?>

            <tr>
                <td><?php echo $info[1]?></td>
                <td><?php echo $info[2]?></td>
                <td><?php echo $info[3]?></td>
                <td><?php echo $info[4]?></td>
                <td><?php echo $info[5]?></td>
                <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalAdminE" onclick="agregarFormulario('<?php echo $datos?>')">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    </i></button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="confirmarEliminar('<?php echo $info[0] ?>')">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    </i></button>
                </td>
            </tr>

            <?php } //ahora si cerramos el WHILE para que se llene la tabla ?>
        </table>
    </div>
</div>
