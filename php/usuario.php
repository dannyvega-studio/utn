<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ACTIVIDAD 09 AJAX, conexion y consulta a BD</title>

        <!-- ### CSS ### -->
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="../source/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" type="text/css" href="../source/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Sweet Alert -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet">
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
            <h1 class="text-center mt-3">Bienvenido a tu Perfil</h1>
        </div>
        <div id="tabla" class="mt-3"></div>
    </div>

        <!-- ### SCRIPTS ### -->
    <!-- IMPORTANTE EL ORDEN PORQUE LUEGO NO FUNCIONAN JAJA -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../source/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <!-- FontAwesome -->
    <script src="../source/FontAwesome/js/all.min.js"></script>
    <!-- Original -->
    <script src="../js/controlador.js"></script>

    <script>
        $(document).ready(function(){
            $('#tabla').load('tabla.usuario.php'); /*manda a llamar la tabla del archivo tabla.php
            tambien mandamos llamar la funcion de actualizar los datos de la tabla*/
        });
    </script>

    </body>
</html>