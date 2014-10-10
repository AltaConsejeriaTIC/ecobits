function Ajax(php_, dataGet, callback) { 
    var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) callback(xmlhttp.responseText);
    }
    xmlhttp.open("POST",php_,true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dataGet());   
}

var nombres = document.getElementById("nombre");
var php = "funciones/comentarios.php";

$('document').ready(function(){
	consulta_coments();
	$('#enviar').click(enviar());
});

function enviar(){
	return function(e){
	Ajax(php,function(){
			var msj = {};
			msj.accion = "enviar";
			msj.nombres = $('#nombres').val();
			msj.email = $('#email').val();
			msj.mensaje = $('#mensaje').val();
			return "request="+JSON.stringify(msj);
		},function(response){
			
		});
	consulta_coments();
	}
}

function consulta_coments(){

	Ajax(php,function(){
			return "request="+JSON.stringify({accion:'consulta'});
		},function(response){
			var data = (JSON.parse(response));
			$('#caja_comentarios').html(data);
		});
}