function login(){
	respuesta= true;
	 usuario= document.getElementById('usuario');
	 divUsuario= document.getElementById('divUsuario');
	 clave= document.getElementById('clave');
	 divClave= document.getElementById('divClave');

	 if (usuario.value == ''){
		divUsuario.className= "form-group has-error";
		respuesta= false;
	}else{
		divUsuario.className= "form-group has-success";
	}

	if(clave.value == ''){
		divClave.className= "form-group has-error";
		respuesta= false;
	}else{
		divClave.className= "form-group has-success";
	}

	//final
	return respuesta;
}

function registro(){
	respuesta= true;

	usuario= document.getElementById('usuarioRegistro');
	recuadroUsuario= document.getElementById('recuadroUsuario');
	formatoUsuario= /^[a-zA-Z0-9\.-_]{5,20}$/;

	clave= document.getElementById('claveRegistro');
	recuadroClave= document.getElementById('recuadroClave');
	formatoClave= /^[a-zA-Z0-9\.-_]{8,20}$/;
	
	email= document.getElementById('emailRegistro');
	recuadroEmail= document.getElementById('recuadroEmail');
	formatoEmail= /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;

	//Validaer el campo de usuario
	if (usuario.value == '') {
		recuadroUsuario.className= "form-group has-error";
		usuario.title= "Ingresa un usuario";
		//JQuery
		$('#usuarioRegistro').tooltip('destroy');
		$('#usuarioRegistro').tooltip('show');
		respuesta= false;
	}else if (!usuario.value.match(formatoUsuario)) {
		recuadroUsuario.className= "form-group has-error";
		usuario.title= "5 a 20 caracteres alfanumericos";
		//JQuery
		$('#usuarioRegistro').tooltip('destroy');
		$('#usuarioRegistro').tooltip('show');
		respuesta= false;
	}else{
		recuadroUsuario.className= "form-group has-success";
		usuario.title= "";
		//JQuery
		$('#usuarioRegistro').tooltip('destroy');
		//$('#usuarioRegistro').tooltip('hide');
	}

	//Validaer el campo de la clave
	if (clave.value == '') {
		recuadroClave.className= "form-group has-error";
		clave.title= "Ingresa la clave";
		//JQuery
		$('#claveRegistro').tooltip('destroy');
		$('#claveRegistro').tooltip('show');
		respuesta= false;
	}else if (!clave.value.match(formatoClave)) {
		recuadroClave.className= "form-group has-error";
		clave.title= "8 a 20 caracteres alfanumericos";
		//JQuery
		$('#claveRegistro').tooltip('destroy');
		$('#claveRegistro').tooltip('show');
		respuesta= false;
	}else{
		recuadroClave.className= "form-group has-success";
		clave.title= "";
		//JQuery
		$('#claveRegistro').tooltip('destroy');
		//$('#claveRegistro').tooltip('hide');
	}

	//Validaer el campo del email
	if (email.value == '') {
		recuadroEmail.className= "form-group has-error";
		email.title= "Ingresa un email";
		//JQuery
		$('#emailRegistro').tooltip('destroy');
		$('#emailRegistro').tooltip('show');
		respuesta= false;
	}else if (!email.value.match(formatoEmail)) {
		recuadroEmail.className= "form-group has-error";
		email.title= "No es un email valido";
		//JQuery
		$('#emailRegistro').tooltip('destroy');
		$('#emailRegistro').tooltip('show');
		respuesta= false;
	}else{
		recuadroEmail.className= "form-group has-success";
		email.title= "";
		//JQuery
		$('#emailRegistro').tooltip('destroy');
		//$('#emailRegistro').tooltip('hide');
	}

	return respuesta;
}