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
  guardar_usuario($db,$_POST['nombre'],$almacena,$consulta);
}else{
  echo "HOla";
  //validar_conexion():
}


function guardar_usuario($db,$nombres,$almacena,$consulta){

$nombres = strip_tags(trim($nombres));
$db->set($almacena,array($nombres,date('Y-m-d H:i:s')));

$resultado=$db->set($consulta,array());
$id = $resultado[0]["id_usuario"];

session_start();
$_SESSION['usuario']=$nombre;
$_SESSION['id']= $id;

header('Location: home.php');
}

function validar_conexion(){

}




?>