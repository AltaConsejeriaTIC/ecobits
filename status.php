<?php


require_once 'comun/class.dbDriver.php';
$db = new DBDriver(PDOConfig::getInstance());

$almacena=
<<<QUERY
INSERT INTO usuarios (nombres,fecha) VALUES(?,?)
QUERY;

$consulta=
<<<QUERY
SELECT id_usuario FROM usuarios order by id_usuario desc
QUERY;




if($_POST['nombre']){
  $recorrido=$_POST['recorrido'];
  guardar_usuario($db,$_POST['nombre'],$recorrido,$almacena,$consulta);
}else{
  echo "hola";
  //validar_conexion():
}


function guardar_usuario($db,$nombres,$recorrido,$almacena,$consulta){

$nombres = strtoupper(strip_tags(trim($nombres)));
$db->set($almacena,array($nombres,date('Y-m-d H:i:s')));

$resultado=$db->set($consulta,array());
$id = $resultado[0]["id_usuario"];

session_start();
$_SESSION['usuario']= strtoupper($nombres);
$_SESSION['id']= $id;
if($recorrido=="si"){
	header('Location: recorrido.php');
}else{
	header('Location: home.php');
}

}

function validar_conexion(){

}




?>