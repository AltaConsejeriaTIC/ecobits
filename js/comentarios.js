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
	$('#enviar').click(enviar());
});

function enviar(){
	Ajax(php,function(){
			var msj = {};
			msj.accion = "enviar";
			msj.id_user = 
			msj.usuario =
			msj.email =
			msj.mensaje =
			return "request="+JSON.stringify(msj);
		},function(response){
			console.log(response);
		});
}
