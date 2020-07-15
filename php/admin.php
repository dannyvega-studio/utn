<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ACTIVIDAD 09 AJAX, conexion y consulta a BD</title>

        <!-- ### CSS ### -->
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <!-- Original -->
        <link rel="stylesheet" type="text/css" href="../css/estilos.admin.css">
        <!-- ### ICONO DEL SITIO ### -->
        <link rel="icon" href="../ico/UT.ico">


<!-- ### BARRA DE NAVEGACION ### -->
<nav class="navbar navbar-expand-md navbar-dark" style="color: white; background-color: black;">
            
            <!-- LOGO EMPRESA EN BARRA DE NAVEGACION -->
            <div>
                <img src="../img/logo.utn.jpg" class="img-thumbnail" alt="LOGO" width="80">
            </div> 
            <div class="nav-nombre-empresa">
                <h4>INGENIERIA EN TI 92 UTN</h4>
            </div>
            
            <!-- BOTON MENU HAMBURGESA -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- BOTONES MENU EN BARRA DE NAVEGACION -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#informacion">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#tendencias">Tendencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#registro">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#registro">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>

    </head>

    <body>

    <!-- CONTENEDOR DE LA TABLA.PHP -->
    <div class="container">
        <div>
            <h1 class="text-center mt-3">Administración de Usuarios</h1>
        </div>
        <div id="tabla" class="mt-3"></div>
    </div>

    <!-- ###################### INICIAN MODALES ############################ -->

    <!-- MODAL PARA REGISTRAR NUEVO USUARIO -->
    <!-- ### MODAL INICIAR SESION ### -->
    <form action="" method="POST">
    <div class="modal fade" id="modalAdminN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image" style="background-image: url(../img/bg-diagonal-lines.jpg);">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>AGREGAR </strong> 
                        <a class="green-text font-weight-bold"><strong> USUARIO</strong></a></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->
                        <div class="md-form mb-5">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellidos"><br>
                        <input type="email" id="correo" name="correo" placeholder="Correo"><br>
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono"><br>
                        <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña"><br>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" id="registrarN" name="registrarN">Agregar Usuario</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    </form>
    <!-- ### TERMINA MODAL REGISTRO NUEVO ### -->

    <!-- MODAL PARA EDITAR -->
    <!-- ### MODAL EDITAR ### -->
    <form action="" method="POST">
    <div class="modal fade" id="modalAdminE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image" style="background-image: url(../img/bg-diagonal-lines.jpg);">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>EDITAR</strong> 
                        <a class="green-text font-weight-bold"><strong> USUARIO</strong></a></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->
                        <div class="md-form mb-5">
                        <input type="text" id="idE" name="" hidden="">
                        <input type="text" id="nombreE" name="nombreE" placeholder="Nombre"><br>
                        <input type="text" id="apellidoE" name="apellidoE" placeholder="Apellidos"><br>
                        <input type="email" id="correoE" name="correoE" placeholder="Correo"><br>
                        <input type="tel" id="telefonoE" name="telefonoE" placeholder="Teléfono"><br>
                        <input type="password" id="contraseñaE" name="contraseñaE" placeholder="Contraseña"><br>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" id="editarN" name="editarN">Editar Usuario</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    </form>
    <!-- ### TERMINA MODAL EDITAR ### -->

    <!-- ###################### TERMINAN MODALES ############################ -->

    <!-- ### SCRIPTS ### -->
    <!-- IMPORTANTE EL ORDEN PORQUE LUEGO NO FUNCIONAN JAJA -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Sweet Alert -->
    <script src="../js/sweetalert2@9.js"></script>
    <!-- FontAwesome -->
    <script src="../js/fontawesome.all.min.js"></script>
    <!-- Original -->
    <script src="../js/controlador.js"></script>

    <script>
        $(document).ready(function(){
            $('#tabla').load('tabla.php'); /*manda a llamar la tabla del archivo tabla.php
            tambien mandamos llamar la funcion de actualizar los datos de la tabla*/
        });
    </script>

    </body>
</html>