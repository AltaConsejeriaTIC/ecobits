function Ajax(php_, dataGet, callback) { 
    var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) callback(xmlhttp.responseText);
    }
    xmlhttp.open("POST",php_,true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dataGet());   
}

//globales

var nombres = document.getElementById("nombre");
var php = "funciones/ingreso.php";

$('document').ready(function(){
	$('#entrar').click(ingresar());
});

function ingresar()
{
	return function(){
		validacion = validar_nombre();

		if(validacion==true){
			document.form_ingreso.submit();
		}else{
			alert("Error");
		}

	}
	
}

function validar_nombre(){
	if(nombres.value.length>0){
		return true;
	}else{
		return false;
	}
}