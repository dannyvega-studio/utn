// ### REGISTRAR USUARIO NUEVO ### //
$('#registrar').click(function(event) { 

    //declaracion de variables//
    var nombre, apellido, correo, contraseña, telefono, 
    expresionCorreo, expresionCorreoOficial, expresionTelefono, expresionContraseña;

    //captura de datos usando jquery//
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    correo = $('#correo').val();
    contraseña = $('#contraseña').val();
    telefono = $('#telefono').val();

    //expresiones regulares aqui//
    //correo//
    /*Para el email debe de aceptar correos como por ejemplo: tic-92000@utnay.edu.mx, mi.correo@gmail.com, correo@outlook.com, etc.*/
    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    //telefono//
    expresionTelefono=/^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;
    //contraseña//
    /*Mínimo 8 caracteres
	Máximo 16
	Al menos una letra mayúscula
	Al menos una letra minúscula
	Al menos un dígito
	No espacios en blanco
	Al menos 1 carácter especial*/
    expresionContraseña=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,16}$/;

    //condicionantes para no dejar campos vacios//
    if(nombre.length == 0 || apellido.length == 0 || correo.length == 0 || telefono.length == 0 || contraseña.length == 0) {
        swal("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(nombre.length>30){
        swal("Error", "El nombre es muy largo", "error");
        return false;
    } else if(apellido.length>30){
        swal("Error", "El apellido es muy largo", "error");
        return false;
    } else if(correo.length>45){
        swal("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(correo) && !expresionCorreoOficial.test(correo)){
        swal("Error", "El correo no es valido", "error");
        return false;
    } else if(isNaN(telefono)){
        swal("Error", "Numero no valido", "error");
        return false;
    } else if(!expresionTelefono.test(telefono)){
        swal("Error", "Numero no valido", "error");
        return false;
    } else if(telefono.length!== 10){
        swal("Error", "Numero no valido", "error");
        return false;
    } else if(contraseña.length> 16){
        swal("Error", "Contaseña muy larga", "error");
        return false;
    } else if(!expresionContraseña.test(contraseña)){
        swal("Error", "Contraseña no valida", "error");
        return false;
    }

    //swal("Muy bien", "No hay campos invalido", "success");

    event.preventDefault();
    var datos = "nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&telefono="+telefono+"&contraseña="+contraseña;

    //mandamos los datos al modelo: registro.php
    $.ajax({
        url: 'php/registro.php',
        type: 'POST',
        data: datos,
    })
    .done(function(res) {
        console.log("Registro satisfactorio");
        $("#respuesta").html(res);
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    })

});

// ### MODAL INICIAR SESION ### //
$('#validar-sesion').click(function(event) { 
    //declaracion de variables//
    var validarCorreo, validarContraseña, 
    expresionCorreo, expresionCorreoOficial, expresionContraseña;

    //captura de datos usando jquery//
    validarCorreo = $('#validarCorreo').val();
    validarContraseña = $('#validarContraseña').val();

    //expresiones regulares aqui//
    //correo//
    /*Para el email debe de aceptar correos como por ejemplo: tic-92000@utnay.edu.mx, mi.correo@gmail.com, correo@outlook.com, etc.*/
    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    //contraseña//
    /*Mínimo 8 caracteres
	Máximo 16
	Al menos una letra mayúscula
	Al menos una letra minúscula
	Al menos un dígito
	No espacios en blanco
	Al menos 1 carácter especial*/
    expresionContraseña=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,16}$/;

    //condicionantes para no dejar campos vacios//
    if(validarCorreo.length == 0 || contraseña.length == 0) {
        swal("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(validarCorreo.length>30){
        swal("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(validarCorreo) && !expresionCorreoOficial.test(validarCorreo)){
        swal("Error", "El correo no es valido", "error");
        return false;
    } else if(!expresionContraseña.test(validarContraseña)){
        swal("Error", "Contraseña no valida", "error");
        return false;
    } 

    //swal("Muy bien", "No hay campos invalido", "success");

    event.preventDefault(); // evita que los datos se envien sin usar Ajax
    var datos = "correo="+validarCorreo+"&contraseña="+validarContraseña;

    $.ajax({
        url: 'php/login.php',
        type: 'POST',
        data: datos,
    })
    .done(function(res){
        console.log(res);
    })
    .fail(function(){
        console.log("error");
    })
    .always(function(){
        console.log("complete");
    })

});